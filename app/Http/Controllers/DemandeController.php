<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Vous devez être connecté.');
    }
        return view('acheteur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('acheteur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'croptype_id'=>'required|exists:croptype',
            'quantity'=>'required',
            'preferred_delivery_date'=>'required',
            'status'=>'required',
            'region'=>'required'
        ]);
        Demande::create([
            'acheteur_id'=>Auth::id(),
            'croptype_id'=>$request->croptype_id,
            'quantity'=>$request->quantity,
            'preferred_delivery_date'=>$request->preferred_delivery_date,
            'status'=>$request->status,
            'region'=>$request->region
        ]);
        return redirect()->route('acheteur.dashboard');
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
}
