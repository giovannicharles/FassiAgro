@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f5f5f5;
    }

    .login-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        background-color: white;
    }

    .login-header {
        background-color: #1a365d;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .login-btn {
        background-color: #2c5282;
        border: none;
    }

    .login-btn:hover {
        background-color: #1e4b79;
    }

    .form-check-label {
        font-weight: 500;
    }

    .form-control:focus {
        border-color: #2c5282;
        box-shadow: 0 0 0 0.2rem rgba(44, 82, 130, 0.25);
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-card">
                <div class="login-header">
                    <h4 class="mb-0">Connexion à votre espace citoyen</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{route('login')}}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}"
                                   required
                                   autofocus
                                   placeholder="exemple@domaine.com">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password"
                                   name="password"
                                   id="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required
                                   placeholder="••••••••">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input type="checkbox"
                                   name="remember"
                                   class="form-check-input"
                                   id="remember"
                                   {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Se souvenir de moi
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn login-btn text-white">
                                Connexion
                            </button>
                        </div>

                        <!-- Forgot password -->
                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a href="" class="text-decoration-none">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        @endif
                        <!-- Register link -->
                        <div class="text-center mt-2">
                            <span>Pas encore de compte ?</span>
                            <a href="{{ route('register') }}" class="text-decoration-none ms-1">
                                Créez un compte
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
