@extends('layouts.app')
@section('title', 'Tableau de bord Administrateur | FassiAgro')
@section('style')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#4CAF50',
                            DEFAULT: '#388E3C',
                            dark: '#2E7D32',
                        },
                        secondary: {
                            light: '#FFA726',
                            DEFAULT: '#FB8C00',
                            dark: '#F57C00',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar {
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar.collapsed .nav-text {
            display: none;
        }

        .content {
            transition: all 0.3s;
        }

        .sidebar.collapsed+.content {
            margin-left: 80px;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                z-index: 100;
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .sidebar+.content {
                margin-left: 0;
            }
        }
    </style>
@endsection
@section('content')
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="sidebar bg-white w-64 border-r border-gray-200 fixed h-full">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between bg-primary-600 text-white">
                <h1 class="text-xl font-bold">FassiAgro</h1>
                <button id="toggleSidebar" class="p-1 rounded hover:bg-primary-700 hidden md:block">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="p-4 text-center py-6">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Admin"
                    class="w-16 h-16 rounded-full mx-auto mb-2 border-2 border-primary-500">
                <h3 class="font-medium">Amina Diallo</h3>
                <p class="text-sm text-gray-500">Administrateur</p>
            </div>
            <nav class="mt-4">
                <a href="#" class="flex items-center px-4 py-3 text-white bg-primary-500 hover:bg-primary-600">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="ml-3 nav-text">Tableau de bord</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-users"></i>
                    <span class="ml-3 nav-text">Utilisateurs</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-leaf"></i>
                    <span class="ml-3 nav-text">Produits & Prix</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-box-open"></i>
                    <span class="ml-3 nav-text">Offres</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="ml-3 nav-text">Demandes</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-chart-line"></i>
                    <span class="ml-3 nav-text">Predictions IA</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-cog"></i>
                    <span class="ml-3 nav-text">Paramètres</span>
                </a>
            </nav>
            <div class="absolute bottom-0 w-full p-4 border-t border-gray-200">
                <button class="flex items-center text-gray-600 hover:text-gray-800">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="ml-3 nav-text">Déconnexion</span>
                </button>
            </div>
            <button id="mobileToggle"
                class="md:hidden absolute right-0 top-1/2 translate-x-1/2 bg-white p-2 rounded-full shadow border">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Main Content -->
        <div class="content flex-1 ml-64 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Tableau de bord administrateur</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Recherche..."
                            class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="p-2 text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="md:hidden" id="mobileMenuToggle">
                        <i class="fas fa-bars text-gray-700 text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover transition-all">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Utilisateurs totaux</p>
                            <h3 class="text-3xl font-bold mt-2">1,452</h3>
                            <p class="text-sm text-green-500 mt-2">
                                <i class="fas fa-arrow-up mr-1"></i> 12% ce mois
                            </p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-full">
                            <i class="fas fa-users text-primary-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover transition-all">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Offres actives</p>
                            <h3 class="text-3xl font-bold mt-2">328</h3>
                            <p class="text-sm text-green-500 mt-2">
                                <i class="fas fa-arrow-up mr-1"></i> 8% ce mois
                            </p>
                        </div>
                        <div class="bg-orange-100 p-3 rounded-full">
                            <i class="fas fa-box-open text-secondary-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover transition-all">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Demandes actives</p>
                            <h3 class="text-3xl font-bold mt-2">176</h3>
                            <p class="text-sm text-red-500 mt-2">
                                <i class="fas fa-arrow-down mr-1"></i> 3% ce mois
                            </p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover transition-all">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Prédictions IA</p>
                            <h3 class="text-3xl font-bold mt-2">57</h3>
                            <p class="text-sm mt-2">
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">
                                    Mis à jour aujourd'hui
                                </span>
                            </p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-brain text-purple-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4 text-gray-700">Actions rapides</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button
                        class="flex items-center justify-center p-4 bg-white rounded-lg border border-gray-200 hover:border-primary-500 hover:text-primary-600 transition-all">
                        <i class="fas fa-sync-alt mr-2"></i> Actualiser les prédictions
                    </button>
                    <button
                        class="flex items-center justify-center p-4 bg-white rounded-lg border border-gray-200 hover:border-primary-500 hover:text-primary-600 transition-all">
                        <i class="fas fa-database mr-2"></i> Sauvegarder la base
                    </button>
                    <button
                        class="flex items-center justify-center p-4 bg-white rounded-lg border border-gray-200 hover:border-primary-500 hover:text-primary-600 transition-all">
                        <i class="fas fa-envelope mr-2"></i> Envoyer notification
                    </button>
                    <button
                        class="flex items-center justify-center p-4 bg-white rounded-lg border border-gray-200 hover:border-primary-500 hover:text-primary-600 transition-all">
                        <i class="fas fa-file-export mr-2"></i> Exporter données
                    </button>
                </div>
            </div>

            <!-- Recent Users -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-semibold text-gray-700">Utilisateurs récents</h2>
                    <button class="text-sm text-primary-600 hover:underline">Voir tous</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Inscription</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Mamadou Keita</div>
                                            <div class="text-sm text-gray-500">mamadou@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Producteur
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 jours</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Actif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-primary-600 hover:text-primary-900 mr-3" title="Voir profil">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-3" title="Éditer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Suspendre">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://randomuser.me/api/portraits/women/28.jpg" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Aissatou Diallo</div>
                                            <div class="text-sm text-gray-500">aissatou@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Acheteur
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1 semaine</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Actif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-primary-600 hover:text-primary-900 mr-3" title="Voir profil">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-3" title="Éditer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Suspendre">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Mohamed Diop</div>
                                            <div class="text-sm text-gray-500">mohamed@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Producteur
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3 semaines</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Inactif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-primary-600 hover:text-primary-900 mr-3" title="Voir profil">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-3" title="Éditer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Suspendre">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Offers -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-semibold text-gray-700">Offres récentes</h2>
                    <button class="text-sm text-primary-600 hover:underline">Voir toutes</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Produit</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Producteur</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantité</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Prix</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Region</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded" src="https://via.placeholder.com/40?text=Riz"
                                                alt="Riz">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Riz local</div>
                                            <div class="text-sm text-gray-500">Céréales</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mamadou Keita</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">500 kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">350 FCFA/kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tambacounda</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Actif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-primary-600 hover:text-primary-900 mr-3" title="Voir détails">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-3" title="Éditer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Désactiver">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded"
                                                src="https://via.placeholder.com/40?text=Ma%C3%AFs" alt="Mais">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Maïs jaune</div>
                                            <div class="text-sm text-gray-500">Céréales</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Ibrahim Sow</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1200 kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">280 FCFA/kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kolda</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Actif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-primary-600 hover:text-primary-900 mr-3" title="Voir détails">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-3" title="Éditer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Désactiver">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent AI Predictions -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-semibold text-gray-700">Prédictions récentes</h2>
                        <button class="text-sm text-primary-600 hover:underline">Voir toutes</button>
                    </div>
                    <div class="space-y-4">
                        <div class="border-l-4 border-primary-500 pl-4 py-1">
                            <div class="text-sm font-medium">Prix du riz - Juin 2023</div>
                            <div class="text-xs text-gray-500 mb-1">Prédiction générée le 12/05/2023</div>
                            <div class="text-sm">Augmentation prévue de <span
                                    class="font-semibold text-green-600">12%</span></div>
                        </div>
                        <div class="border-l-4 border-secondary-500 pl-4 py-1">
                            <div class="text-sm font-medium">Prix de l'arachide - Juin 2023</div>
                            <div class="text-xs text-gray-500 mb-1">Prédiction générée le 10/05/2023</div>
                            <div class="text-sm">Stabilité prévue avec variation de <span
                                    class="font-semibold text-blue-600">±2%</span></div>
                        </div>
                        <div class="border-l-4 border-red-500 pl-4 py-1">
                            <div class="text-sm font-medium">Prix du mil - Juin 2023</div>
                            <div class="text-xs text-gray-500 mb-1">Prédiction générée le 08/05/2023</div>
                            <div class="text-sm">Baisse prévue de <span class="font-semibold text-red-600">8%</span></div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-semibold text-gray-700">Statut des modèles IA</h2>
                        <button class="text-sm text-primary-600 hover:underline">Rafraîchir</button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium">Modèle prix riz</div>
                                <div class="text-xs text-gray-500">Dernière mise à jour: 11/05/2023</div>
                            </div>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Actif
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium">Modèle prix arachide</div>
                                <div class="text-xs text-gray-500">Dernière mise à jour: 09/05/2023</div>
                            </div>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Actif
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium">Modèle prix fruits</div>
                                <div class="text-xs text-gray-500">En cours de formation</div>
                            </div>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                En cours
                            </span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button
                            class="w-full bg-primary-500 hover:bg-primary-600 text-white py-2 px-4 rounded-lg transition-all">
                            <i class="fas fa-sync-alt mr-2"></i> Lancer l'actualisation des prédictions
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('bg-gray-50');
        });
        // Toggle sidebar
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.sidebar');
        const content = document.querySelector('.content');

        if (toggleSidebar) {
            toggleSidebar.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
            });
        }

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileToggle = document.getElementById('mobileToggle');

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
        }

        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
        }
    </script>
@endsection
