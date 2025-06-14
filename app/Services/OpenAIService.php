<?php

// app/Services/OpenAIService.php
namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenAIService
{
    private $client;
    private $config;

    public function __construct()
    {
        $this->client = new Client();
        $this->config = config('services.openai');
    }

    public function ask(string $message): string
    {
        try {
            $response = Http::timeout(30)
                ->withHeaders([
                    'Authorization' => 'Bearer '.$this->config['key'],
                    'Content-Type' => 'application/json',
                ])
                ->post($this->config['endpoint'], [
                    'model' => $this->config['model'],
                    'messages' => [
                        ['role' => 'system', 'content' => 'Vous êtes un assistant utile.'],
                        ['role' => 'user', 'content' => $message]
                    ],
                    'temperature' => 0.7,
                ]);

            if ($response->failed()) {
                Log::error('Erreur OpenAI', [
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);
                return 'Erreur de service';
            }

            return $response->json()['choices'][0]['message']['content'];

        } catch (\Exception $e) {
            Log::error('Exception OpenAI: '.$e->getMessage());
            return 'Service temporairement indisponible';
        }
    }
}
