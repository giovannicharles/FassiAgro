<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres - FassiAgro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }
        .tab-content.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .toggle-checkbox:checked {
            @apply right-0 bg-green-600;
        }
        .toggle-checkbox:checked + .toggle-label {
            @apply bg-green-200;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <div class="flex items-center mb-8">
            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                <i class="fas fa-cog text-2xl"></i>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Paramètres</h1>
                <p class="text-gray-600">Gérez les préférences et paramètres de votre compte acheteur</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="border-b border-gray-200">
                <nav class="flex flex-col sm:flex-row">
                    <button data-tab="company" class="tab-btn flex items-center px-6 py-4 text-sm font-medium border-b-2 border-transparent hover:bg-gray-50 active">
                        <i class="fas fa-building mr-2 text-green-600"></i>
                        Information Entreprise
                    </button>
                    <button data-tab="preferences" class="tab-btn flex items-center px-6 py-4 text-sm font-medium border-b-2 border-transparent hover:bg-gray-50">
                        <i class="fas fa-heart mr-2 text-green-600"></i>
                        Préférences
                    </button>
                    <button data-tab="notifications" class="tab-btn flex items-center px-6 py-4 text-sm font-medium border-b-2 border-transparent hover:bg-gray-50">
                        <i class="fas fa-bell mr-2 text-green-600"></i>
                        Notifications
                    </button>
                    <button data-tab="password" class="tab-btn flex items-center px-6 py-4 text-sm font-medium border-b-2 border-transparent hover:bg-gray-50">
                        <i class="fas fa-lock mr-2 text-green-600"></i>
                        Mot de passe
                    </button>
                </nav>
            </div>

            <div class="p-6">
                <!-- Company Information Tab -->
                <div id="company" class="tab-content active">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-building mr-2 text-green-600"></i>
                        Informations de l'entreprise
                    </h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nom de l'entreprise *</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Entrez le nom de votre entreprise" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Secteur d'activité *</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    <option value="">Sélectionnez un secteur</option>
                                    <option>Transformation de céréales</option>
                                    <option>Production d'huiles végétales</option>
                                    <option>Industrie laitière</option>
                                    <option>Conserverie de fruits/légumes</option>
                                    <option>Boulangerie industrielle</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="contact@entreprise.com" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone *</label>
                                <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="+212 6 12 34 56 78" required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Zone industrielle, Ville, Pays"></textarea>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors">
                                <i class="fas fa-save mr-2"></i>
                                Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Preferences Tab -->
                <div id="preferences" class="tab-content">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-heart mr-2 text-green-600"></i>
                        Préférences d'achat
                    </h2>
                    <form>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Cultures favorites</label>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Blé</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Orge</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Maïs</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Olives</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Amandes</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Dattes</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Agrumes</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded text-green-600 focus:ring-green-500">
                                        <span>Tomates</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Seuils de prix acceptables (par tonne)</label>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-xs text-gray-500 mb-1">Blé tendre (min)</label>
                                        <div class="relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500">MAD</span>
                                            </div>
                                            <input type="number" class="block w-full pl-12 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="0">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs text-gray-500 mb-1">Orge (max)</label>
                                        <div class="relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500">MAD</span>
                                            </div>
                                            <input type="number" class="block w-full pl-12 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="0">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs text-gray-500 mb-1">Olives (moyenne)</label>
                                        <div class="relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500">MAD</span>
                                            </div>
                                            <input type="number" class="block w-full pl-12 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Méthodes de contact préférées</label>
                                <div class="space-y-3">
                                    <label class="flex items-start space-x-3">
                                        <input type="checkbox" class="mt-1 rounded text-green-600 focus:ring-green-500">
                                        <div>
                                            <span class="text-gray-700">Email</span>
                                            <p class="text-xs text-gray-500">Recevoir des offres par email</p>
                                        </div>
                                    </label>
                                    <label class="flex items-start space-x-3">
                                        <input type="checkbox" class="mt-1 rounded text-green-600 focus:ring-green-500">
                                        <div>
                                            <span class="text-gray-700">Appel téléphonique</span>
                                            <p class="text-xs text-gray-500">Être contacté par téléphone pour les offres urgentes</p>
                                        </div>
                                    </label>
                                    <label class="flex items-start space-x-3">
                                        <input type="checkbox" class="mt-1 rounded text-green-600 focus:ring-green-500">
                                        <div>
                                            <span class="text-gray-700">Notifications push</span>
                                            <p class="text-xs text-gray-500">Recevoir des alertes sur l'application mobile</p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors">
                                <i class="fas fa-save mr-2"></i>
                                Enregistrer les préférences
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Notifications Tab -->
                <div id="notifications" class="tab-content">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-bell mr-2 text-green-600"></i>
                        Paramètres de notification
                    </h2>
                    <form>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <h3 class="font-medium text-gray-800">Alertes nouvelles offres</h3>
                                    <p class="text-sm text-gray-600">Être notifié lorsqu'une nouvelle offre correspond à vos critères</p>
                                </div>
                                <div class="relative inline-block w-12 mr-2 align-middle select-none">
                                    <input type="checkbox" id="new-offers" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" checked>
                                    <label for="new-offers" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>

                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <h3 class="font-medium text-gray-800">Suivi des contrats</h3>
                                    <p class="text-sm text-gray-600">Notifications sur l'état d'avancement de vos contrats</p>
                                </div>
                                <div class="relative inline-block w-12 mr-2 align-middle select-none">
                                    <input type="checkbox" id="contract-tracking" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" checked>
                                    <label for="contract-tracking" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>

                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <h3 class="font-medium text-gray-800">Prévisions de prix</h3>
                                    <p class="text-sm text-gray-600">Alertes sur les tendances de prix du marché</p>
                                </div>
                                <div class="relative inline-block w-12 mr-2 align-middle select-none">
                                    <input type="checkbox" id="price-forecasts" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer">
                                    <label for="price-forecasts" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-6">
                                <h3 class="font-medium text-gray-800 mb-3">Fréquence des notifications</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-green-500">
                                        <input type="radio" name="frequency" class="h-4 w-4 text-green-600 focus:ring-green-500" checked>
                                        <span class="block text-sm font-medium text-gray-700">En temps réel</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-green-500">
                                        <input type="radio" name="frequency" class="h-4 w-4 text-green-600 focus:ring-green-500">
                                        <span class="block text-sm font-medium text-gray-700">Quotidiennement</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-green-500">
                                        <input type="radio" name="frequency" class="h-4 w-4 text-green-600 focus:ring-green-500">
                                        <span class="block text-sm font-medium text-gray-700">Hebdomadaire</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors">
                                <i class="fas fa-save mr-2"></i>
                                Mettre à jour les notifications
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Password Tab -->
                <div id="password" class="tab-content">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-lock mr-2 text-green-600"></i>
                        Sécurité du compte
                    </h2>
                    <form>
                        <div class="space-y-4 max-w-md">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel *</label>
                                <div class="relative">
                                    <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Entrez votre mot de passe actuel" required>
                                    <button type="button" class="absolute right-3 top-2 text-gray-500 hover:text-gray-700">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe *</label>
                                <div class="relative">
                                    <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Créez un nouveau mot de passe" required>
                                    <button type="button" class="absolute right-3 top-2 text-gray-500 hover:text-gray-700">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères, dont une majuscule et un chiffre.</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe *</label>
                                <div class="relative">
                                    <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Retapez votre nouveau mot de passe" required>
                                    <button type="button" class="absolute right-3 top-2 text-gray-500 hover:text-gray-700">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flex flex-col sm:flex-row sm:justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                            <button type="button" class="text-green-600 hover:text-green-800 font-medium flex items-center">
                                <i class="fas fa-key mr-2"></i>
                                Mot de passe oublié ?
                            </button>
                            <button type="submit" class="px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors">
                                <i class="fas fa-sync-alt mr-2"></i>
                                Changer le mot de passe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');

                    // Remove active class from all buttons and contents
                    tabBtns.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));

                    // Add active class to clicked button and corresponding content
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Toggle password visibility
            document.querySelectorAll('[type="password"] + button').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    if (input.type === 'password') {
                        input.type = 'text';
                        this.innerHTML = '<i class="far fa-eye-slash"></i>';
                    } else {
                        input.type = 'password';
                        this.innerHTML = '<i class="far fa-eye"></i>';
                    }
                });
            });
        });
    </script>
</body>
</html>
