<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt(['email' => $credentials['email'], 'Mot_De_Passe' => $credentials['password']])) {
        return redirect()->route('admin.dashboard');
    }

    if (Auth::guard('officier')->attempt(['email' => $credentials['email'], 'Mot_De_Passe' => $credentials['password']])) {
        return redirect()->route('officier.dashboard');
    }

    if (Auth::guard('citoyen')->attempt(['email' => $credentials['email'], 'Mot_De_Passe' => $credentials['password']])) {
        return redirect()->route('citoyen.dashboard');
    }

    return back()->withErrors(['email' => 'Email ou mot de passe incorrect']);
}

}
