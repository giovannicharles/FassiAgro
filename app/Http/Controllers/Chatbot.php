<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatBot extends Controller
{
 public function ask(Request $request)
 {
 $question = $request->input('message');
 $response = Http::withHeaders([
 'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
 ])->post('https://api.openai.com/v1/chat/completions', [
 'model' => 'gpt-3.5-turbo',
 'messages' => [
 [
 'role' => 'system',
 'content' => "Tu es FassiBot, un assistant agricole
intelligent pour les agriculteurs camerounais. Donne des conseils simples
et pratiques. Réponds en français, avec un ton accessible. Si on te demande
'Quand semer le maïs ?', tu expliques la période idéale selon le climat
local."
 ],
 [
 'role' => 'user',
 'content' => $question
 ]
 ],
 'max_tokens' => 500,
 'temperature' => 0.7
 ]);
 $reply = $response->json()['choices'][0]['message']['content'];
 return response()->json([
 'reply' => $reply
 ]);
 }
}
