<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenRouterService;

class ChatController extends Controller
{
    /**
     * Affiche l'interface de chat
     */
    public function index()
    {
        // Réinitialisation de l'historique au démarrage
        $openRouter = new OpenRouterService();
        $openRouter->resetHistory();

        return view('chatbot');
    }

    /**
     * Traite les messages du chatbot
     */
    public function chat(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        try {
            $openRouter = new OpenRouterService();
            $reply = $openRouter->generateResponse($request->message);

            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            return response()->json([
                'reply' => "Erreur: " . $e->getMessage()
            ]);
        }
    }

    /**
     * Réinitialise la conversation du chatbot
     */
    public function resetChat(Request $request)
    {
        $openRouter = new OpenRouterService();
        $openRouter->resetHistory();

        return response()->json(['status' => 'success']);
    }
}
