<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Officier;
use Illuminate\Support\Facades\Hash;
class OfficierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allOfficiers= Officier::all();
        return view('admin.officiers.index',compact('$allOfficiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return ('admin.officiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'Nom' => 'required|string|max:255',
            'email' => 'required|email|unique:officiers',
            'password' => 'required|min:6',
            'genre' => 'nullable|string',
            'telephone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        Officier::create([
            'Nom' => $request->Nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'genre' => $request->genre,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'ID_Admin' => auth()->id(), // L'admin connecté est assigné
        ]);

        return redirect()->route('officiers.index')->with('success', 'Officier ajouté avec succès');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $officier= Officier::findOrFail($id);
        return view('admin.officiers.show',compact('$officier'));
        
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $officier= Officier::findOrFail($id);
        return view('admin.officiers.edit',compact('$officier'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $officier= Officier::findOrFail($id);
        $request->validate([
            'Nom' => 'required|string|max:255',
            'email' => 'required|email|unique:officiers,email,' . $officier->id,
            'password' => 'nullable|min:6',
            'genre' => 'nullable|string',
            'telephone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);
        
        $officier->update([
            'Nom' => $request->Nom,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $officier->password,
            'genre' => $request->genre,
            'telephone' => $request->telephone,
            'address' => $request->address,
        ]);
        
        return redirect()->route('officiers.index')->with('success', 'Officier mis à jour');
        
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $officier= Officier::findOrFail($id);
        $officier->delete();
    }
}
