<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\CropType;
use App\Models\PricePredictions;
use App\Models\CropGuide;
use Carbon\Carbon;
class ChatBotController extends Controller
{


public function ask(Request $request)
{
    $question = $request->input('message');
    $user = $request->user(); // si connecté

    // Exemples de données dynamiques
    $crops = CropType::pluck('name')->toArray(); // ["Maïs", "Manioc", "Tomate"]
    $predictions = PricePredictions::latest()->take(5)->get();
    $guides = CropGuide::whereIn('crop_name', $crops)->get();

    $priceContext = $predictions->map(fn($p) =>
        "- {$p->cropType->name} ({$p->region}): {$p->predicted_price} FCFA prévu en " . Carbon::parse($p->forecast_month)->format('F')
    )->implode("\n");

    $guideContext = $guides->map(fn($g) =>
        "- {$g->crop_name} (Région: {$g->region}): Plantation idéale en {$g->best_planting_months}, Récolte en {$g->best_harvest_months}."
    )->implode("\n");

    $dynamicContext = <<<CONTEXT
Voici les informations agricoles actuelles issues de notre base FassiAgro :

📊 Prix prédits :
$priceContext

🌾 Périodes recommandées :
$guideContext

Tu dois répondre de manière simple et locale, en te basant sur ces données si possible.
CONTEXT;

    // Appel OpenAI
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
    ])->post('https://api.openai.com/v1/chat/completions', [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            [
                'role' => 'system',
                'content' => "Tu es FassiBot, un assistant agricole camerounais. Tu aides les producteurs avec des réponses basées sur le contexte suivant :\n\n" . $dynamicContext
            ],
            [
                'role' => 'user',
                'content' => $question
            ]
        ],
        'temperature' => 0.7,
        'max_tokens' => 500
    ]);

    return response()->json([
        'reply' => $response['choices'][0]['message']['content'] ?? 'Je n’ai pas pu répondre pour le moment.'
    ]);
}

}
