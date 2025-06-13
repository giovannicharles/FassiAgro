<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
class DashAcheteur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Vous devez être connecté.');
    }
    // Récupérer l'ID de l'utilisateur connecté
    $acheteurId = Auth::user()->id_user;

    // Récupérer ses demandes
    $demandes = Demande::with('croptype')->where('acheteur_id', $acheteurId)->get();
    $user_name=Auth::user()->name;
    // Passer les données à la vue
    return view('acheteur.dashboard', compact('demandes','user_name'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showDemande(){
        return view('acheteur.demande');
    }
    public function showContrat(){
        return view('acheteur.contrat');
    }
    public function showProfil(){
        return view('acheteur.profil');
    }

}
