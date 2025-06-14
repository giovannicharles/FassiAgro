<?php

// app/Http/Controllers/ChatbotController.php
namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;


class ChatbotController extends Controller

{
    public function __construct(
        protected OpenAIService $chatbot
    ) {}



public function chat(Request $request, OpenAIService $chatbot)
{
    return response()->json([
        'reply' => $chatbot->ask($request->message)
    ]);
}
    public function showChat()
    {
        return view('chatbot');
    }

    public function ask(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        return response()->json([
            'reply' => $this->chatbot->ask($request->message),
        ]);
    }
}
