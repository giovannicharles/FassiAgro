<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        echo "register";
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'telephone' => 'required|string|max:10',
            'password' => 'required|min:4|confirmed',
            'role' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ];

        User::create($data);
        return redirect()->route('login')->with('success', 'Inscription réussie');
    }
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     echo $request->password;
    //     // Admin
    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         return redirect()->route('admin.dashboard');
    //     }

    //     // Officier
    //     if (Auth::guard('officier')->attempt($credentials)) {
    //         return redirect()->route('officier.dashboard');
    //     }

    //     // Citoyen
    //     if (Auth::guard('citoyen')->attempt($credentials)) {
    //         return redirect()->route('citoyen.dashboard');
    //     }

    //     return back()->withErrors(['email' => 'Identifiants incorrects']);
    // }
public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $email = $request->email;
    $password = $request->password;
    $user= User::where('email',$email)->first();

    if($user && Hash::check($password, $user->password)){
        Auth::login($user);
        return redirect()->route($user->role.'.dashboard');
    }
    return back()->withErrors(['email' => 'Identifiants incorrects']);
}

    public function showRegisterForm()
    {
        return view('auth.connexion');
    }

    public function showLoginForm()
    {
        return view('auth.connexion');
    }


}
