@extends('layouts.app')
@section('title', '')
@section('style')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-agro-pattern {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgLz48L3N2Zz4=');
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input-error {
            border-color: #f87171 !important;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            z-index: 10;
        }

        .input-field {
            padding-left: 2.75rem !important;
        }
    </style>
@endsection()
@section('content')
    <!-- Main Container -->
    <div class="flex flex-1 flex-col lg:flex-row">
        <!-- Left Panel - Welcome Section -->
        <div
            class="w-full lg:w-1/2 bg-gradient-to-br from-green-600 to-green-800 text-white p-8 lg:p-12 flex flex-col justify-between bg-agro-pattern">
            <div class="fade-in">
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mr-3 shadow-lg">
                        <i class="fas fa-leaf text-green-600 text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">FassiAgro</h1>
                </div>

                <h2 class="text-3xl lg:text-4xl font-bold mb-4">La plateforme intelligente qui connecte l'agriculture
                    camerounaise</h2>
                <p class="text-lg lg:text-xl opacity-90 mb-8">Simplifiez vos transactions agricoles grâce à notre
                    technologie innovante.</p>

                <div class="hidden lg:block">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mr-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <p>Connectez des milliers de producteurs et acheteurs</p>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <p>Optimisez vos revenus et votre chaîne d'approvisionnement</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <p>Transactions sécurisées et transparentes</p>
                    </div>
                </div>
            </div>

            <div class="hidden lg:block fade-in">
                <div class="flex items-center">
                    <div
                        class="w-16 h-16 rounded-full bg-orange-500/20 flex items-center justify-center mr-4 border-2 border-orange-500/30">
                        <i class="fas fa-tractor text-2xl text-orange-300"></i>
                    </div>
                    <div
                        class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mr-4 border-2 border-green-500/30">
                        <i class="fas fa-industry text-2xl text-green-300"></i>
                    </div>
                    <div
                        class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center border-2 border-white/30">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel - Authentication -->
        <div class="w-full lg:w-1/2 p-8 lg:p-12 flex items-center justify-center bg-white">
            <div class="w-full max-w-md fade-in">
                <div class="text-center mb-8 lg:hidden">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-600 flex items-center justify-center mr-3 shadow">
                            <i class="fas fa-leaf text-white text-xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-green-800">FassiAgro</h1>
                    </div>
                    <h2 class="text-xl font-medium text-gray-700 mb-2">Bienvenue sur la plateforme</h2>
                    <p class="text-gray-500">Connectez-vous ou créez un compte</p>
                </div>

                <!-- Tabs -->
                <div class="flex border-b border-gray-200 mb-6">
                    <button id="login-tab"
                        class="flex-1 py-2 px-4 text-center font-medium text-green-600 border-b-2 border-green-600">
                        Connexion
                    </button>
                    <button id="register-tab"
                        class="flex-1 py-2 px-4 text-center font-medium text-gray-500 hover:text-green-600">
                        Inscription
                    </button>
                </div>

                <!-- Login Form -->
                <div id="login-form">
                    <div >
                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf
                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" placeholder="Adresse email" name="email"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('email') is-invalid @enderror"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" placeholder="Mot de passe" name="password"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('password') is-invalid @enderror"
                                    required>
                                <a href="#" class="absolute right-3 top-3 text-gray-400 hover:text-green-600">
                                    <i class="far fa-eye"></i>
                                </a>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="remember" name="remember"
                                        class="w-4 h-4 text-green-600 rounded border-gray-300 focus:ring-green-500">
                                    <label for="remember" class="ml-2 text-sm text-gray-600">Se souvenir de moi</label>
                                </div>
                                <a href="#" class="text-sm text-green-600 hover:underline">Mot de passe oublié ?</a>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-green-600 to-green-500 hover:from-green-700 hover:to-green-600 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                                <span>Se connecter</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>

                            <div class="flex items-center my-4">
                                <div class="flex-1 border-t border-gray-200"></div>
                                <div class="px-3 text-sm text-gray-400">OU</div>
                                <div class="flex-1 border-t border-gray-200"></div>
                            </div>

                            <!-- Social Login (future feature) -->
                            <button
                                type="submit"
                                class="w-full border border-gray-200 bg-white text-gray-700 font-medium py-3 px-4 rounded-lg shadow-sm hover:bg-gray-50 transition duration-200 flex items-center justify-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                                    alt="Google" class="w-5 h-5 mr-2">
                                <span>Continuer avec Google</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Register Form (hidden by default) -->
                <div id="register-form" class="hidden">
                    <div class="space-y-5">
                        <form method="POST" action="{{ route('register') }}" class="space-y-5">
                            @csrf

                            <div class="input-wrapper">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" placeholder="Nom complet" name="name"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('name') is-invalid @enderror"
                                    required>

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" placeholder="Adresse email" name="email"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('email') is-invalid @enderror"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-phone input-icon"></i>
                                <input type="text" placeholder="Téléphone (optionnel)" name="telephone"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('telephone') is-invalid @enderror"
                                    required>
                                @error('telephone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" placeholder="Mot de passe" name="password"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('password') is-invalid @enderror"
                                    required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" placeholder="Confirmer mot de passe" name="password_confirmation"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                                    required>
                            </div>

                            <div class="input-wrapper">
                                <i class="fas fa-user-tag input-icon"></i>
                                <select
                                    name="role"
                                    class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none appearance-none bg-white pr-8 @error('role') is-invalid @enderror"
                                    required>
                                    <option value="" disabled selected>Je suis...</option>
                                    <option value="producteur">Producteur</option>
                                    <option value="acheteur">Acheteur</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-4 text-gray-400"></i>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="flex items-center mb-2">
                                <input type="checkbox" id="terms"
                                    name="conditions"
                                    class="w-4 h-4 text-green-600 rounded border-gray-300 focus:ring-green-500">
                                <label for="terms" class="ml-2 text-sm text-gray-600">J'accepte les <a href="#"
                                        class="text-green-600 hover:underline">conditions d'utilisation</a></label>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-orange-500 to-orange-400 hover:from-orange-600 hover:to-orange-500 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                                <span>Créer un compte</span>
                                <i class="fas fa-user-plus ml-2"></i>
                            </button>

                        </form>
                            <p class="text-xs text-gray-500 text-center mt-4">
                                Vos données sont protégées. FassiAgro respecte la confidentialité des producteurs et des
                                entreprises.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100 py-4 px-8">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p>© 2023 FassiAgro. Tous droits réservés.</p>
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-green-600">Conditions d'utilisation</a>
                <a href="#" class="hover:text-green-600">Confidentialité</a>
                <a href="#" class="hover:text-green-600">Contact</a>
            </div>
        </div>
    </footer>
@endsection()
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            // Tab switching
            loginTab.addEventListener('click', function() {
                loginTab.classList.add('text-green-600', 'border-green-600');
                loginTab.classList.remove('text-gray-500');
                registerTab.classList.remove('text-green-600', 'border-green-600');
                registerTab.classList.add('text-gray-500');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            });

            registerTab.addEventListener('click', function() {
                registerTab.classList.add('text-green-600', 'border-green-600');
                registerTab.classList.remove('text-gray-500');
                loginTab.classList.remove('text-green-600', 'border-green-600');
                loginTab.classList.add('text-gray-500');
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            });

            // Password visibility toggle
            const passwordFields = document.querySelectorAll('input[type="password"]');
            passwordFields.forEach(field => {
                const wrapper = field.closest('.input-wrapper');
                if (wrapper) {
                    const toggleBtn = document.createElement('button');
                    toggleBtn.type = 'button';
                    toggleBtn.className =
                        'absolute right-3 top-3 text-gray-400 hover:text-green-600 focus:outline-none';
                    toggleBtn.innerHTML = '<i class="far fa-eye"></i>';

                    toggleBtn.addEventListener('click', function() {
                        const icon = this.querySelector('i');
                        if (field.type === 'password') {
                            field.type = 'text';
                            icon.classList.replace('fa-eye', 'fa-eye-slash');
                        } else {
                            field.type = 'password';
                            icon.classList.replace('fa-eye-slash', 'fa-eye');
                        }
                    });

                    if (!wrapper.querySelector('a')) {
                        wrapper.appendChild(toggleBtn);
                    }
                }
            });

            // Simulate form submission and error handling

        });
    </script>
@endsection()
