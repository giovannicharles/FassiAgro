<?php

use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashAdmin;
use App\Http\Controllers\DashProducteur;
use App\Http\Controllers\DashAcheteur;
use App\Models\Demande;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth::routes();

Route::get('/preloader', function () {
    return view('preloader');
});
Route::get('/', function () {
    return redirect('/preloader');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/',[HomeController::class,'index'])->name('');

// les routes pour l'authentification

// _____________________LOGIN____________________________
Route::get('/login',[AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
// _____________________REGISTER____________________________
Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'register']);

// ____________________LES DASHBOARDS________________
Route::get('/dashAdmin',[DashAdmin::class,'index'])->name('admin.dashboard');
Route::get('/dashProducteur',[DashProducteur::class,'index'])->name('producteur.dashboard');
Route::get('/dashAcheteur',[DashAcheteur::class,'index'])->name('acheteur.dashboard');


// __________ DEMANDES POUR ACHETEURS ____________________
Route::middleware(['auth'])->group(function(){
    Route::get('acheteur/demande',[DemandeController::class,'index'])->name('acheteur.index');
    Route::get('/acheteur/create',[DemandeController::class,'create'])->name('acheteur.create');
});



// ____________________ POUR LE CHATBOT ____________________________
// routes/web.php
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/chat', [ChatController::class, 'chat'])->name('chat.send');



// __________ pour contrat ___________
Route::get('/contrat',[DashAcheteur::class,'showContrat'])->name('acheteur.contrat');
Route::get('/profil',[DashAcheteur::class,'showProfil'])->name('acheteur.profil');

