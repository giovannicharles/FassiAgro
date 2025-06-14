<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class OpenRouterService
{
    protected $apiKey;
    protected $model;
    protected $apiUrl = 'https://openrouter.ai/api/v1/chat/completions';

    // Système de mémoire conversationnelle
    const MAX_HISTORY = 10; // Nombre max d'échanges à conserver

    public function __construct()
    {
        $this->apiKey = config('services.openrouter.key');
        $this->model = config('services.openrouter.model', 'qwq-32b');
    }

    public function generateResponse(string $message): string
    {
        try {
            if (empty($this->apiKey)) {
                Log::error('OpenRouter API Key is missing');
                return '⚠️ Erreur de configuration du service IA.';
            }

            // Récupération de l'historique de la session
            $history = Session::get('chat_history', []);

            // Construction des messages avec historique
            $messages = $this->buildMessages($message, $history);

            $headers = [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'HTTP-Referer' => config('app.url', 'http://localhost'),
                'X-Title' => config('app.name', 'Laravel Chatbot'),
            ];

            $response = Http::timeout(60)
                ->withHeaders($headers)
                ->post($this->apiUrl, [
                    'model' => $this->model,
                    'messages' => $messages,
                    'max_tokens' => 1200,
                    'temperature' => 0.7,
                ]);

            if ($response->failed()) {
                Log::error('OpenRouter API Error', [
                    'status' => $response->status(),
                    'response' => $response->body(),
                    'headers' => $headers
                ]);
                return '⚠️ Erreur API: ' . $response->status() . ' - ' . $response->body();
            }

            $botReply = $response->json()['choices'][0]['message']['content'] ?? 'Aucune réponse reçue.';

            // Mise à jour de l'historique
            $this->updateHistory($message, $botReply);

            return $botReply;
        } catch (\Exception $e) {
            Log::error('OpenRouter Service Exception: '.$e->getMessage());
            return '⚠️ Erreur de connexion au service IA: ' . $e->getMessage();
        }
    }

    /**
     * Construit les messages pour l'API avec historique et instructions
     */
    protected function buildMessages(string $userMessage, array $history): array
    {
        $messages = [];

        // Instruction système pour limiter aux sujets agricoles
        $messages[] = [
            'role' => 'system',
            'content' => "Tu es FassiBot, un assistant agricole spécialisé dans l'agriculture au Cameroun. "
                . "Tu réponds exclusivement aux questions sur les sujets agricoles. "
                . "Si un utilisateur pose une question hors-sujet (ex: informatique, finance, politique, etc.), "
                . "réponds poliment que tu ne traites que des questions agricoles. "
                . "Voici les domaines que tu couvres : "
                . "- Cultures (maïs, manioc, cacao, café, etc.) "
                . "- Élevage "
                . "- Techniques agricoles "
                . "- Prix des produits agricoles "
                . "- Périodes de plantation et récolte "
                . "- Conseils pour les agriculteurs "
                . "- Tendances du marché agricole "
                . "Réponds toujours en français et utilise un ton professionnel mais accessible."
        ];

        // Ajout de l'historique
        foreach ($history as $exchange) {
            $messages[] = ['role' => 'user', 'content' => $exchange['user']];
            $messages[] = ['role' => 'assistant', 'content' => $exchange['bot']];
        }

        // Ajout du nouveau message
        $messages[] = ['role' => 'user', 'content' => $userMessage];

        return $messages;
    }

    /**
     * Met à jour l'historique de la conversation
     */
    protected function updateHistory(string $userMessage, string $botReply): void
    {
        $history = Session::get('chat_history', []);

        // Ajoute le nouvel échange
        $history[] = [
            'user' => $userMessage,
            'bot' => $botReply
        ];

        // Limite la taille de l'historique
        if (count($history) > self::MAX_HISTORY) {
            $history = array_slice($history, -self::MAX_HISTORY);
        }

        Session::put('chat_history', $history);
    }

    /**
     * Réinitialise l'historique de la conversation
     */
    public function resetHistory(): void
    {
        Session::forget('chat_history');
    }
}
