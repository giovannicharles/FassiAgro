<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Acheteur - FassiAgro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar:hover {
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        }

        .active-nav {
            background-color: #f0fdf4;
            border-right: 4px solid #16a34a;
            color: #16a34a !important;
        }

        .progress-bar {
            animation: progress 1.5s ease-in-out;
        }

        @keyframes progress {
            from { width: 0; }
        }

        #priceChart, #map {
            min-height: 250px;
        }

        .tooltip {
            position: relative;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-50 flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <div class="sidebar w-64 bg-white border-r border-gray-200 flex flex-col h-full">
        <!-- Logo -->
        <div class="p-4 border-b border-gray-200">
            <div class="flex items-center">
                <img src="https://placehold.co/40x40" alt="FassiAgro Logo" class="mr-2">
                <h1 class="text-xl font-bold text-gray-800">FassiAgro</h1>
            </div>
        </div>

        <!-- User Profile -->
        <div class="p-4 border-b border-gray-200 flex items-center">
            <img src="https://placehold.co/50x50" alt="User" class="rounded-full mr-3">
            <div>
                <p class="font-medium text-gray-800">Socacim S.A.</p>
                <p class="text-xs text-gray-500">Acheteur certifié</p>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 p-2 overflow-y-auto">
            <ul>
                <li>
                    <a href="#" class="active-nav flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-tachometer-alt mr-3 text-green-600"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('acheteur.index') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-file-contract mr-3 text-orange-500"></i>
                        <span>Mes Demandes</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-users mr-3 text-green-600"></i>
                        <span>Producteurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('acheteur.contrat') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-file-alt mr-3 text-orange-500"></i>
                        <span>Contrats</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('acheteur.profil' )}}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-cog mr-3 text-gray-400"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li class="mt-6">
                    <a href="{{ route('home' )}}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-cog mr-3 text-gray-400"></i>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Help & Support -->
        <div class="p-4 border-t border-gray-200">
            <a href="#" class="flex items-center text-gray-600 hover:text-green-600">
                <i class="fas fa-question-circle mr-2"></i>
                <span class="text-sm">Aide & Support</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 overflow-y-auto">
        <!-- Header -->
        <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">Tableau de bord Acheteur</h2>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent w-64">
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-bell text-gray-500 hover:text-green-600 cursor-pointer"></i>
                    <div class="border-l border-gray-300 h-8"></div>
                    <div class="flex items-center">
                        <span class="text-gray-700 mr-2 hidden md:inline">Socacim S.A.</span>
                        <img src="https://placehold.co/40x40" alt="User" class="rounded-full">
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-6">
            <!-- Stats and Quick Action -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 md:col-span-3">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistiques</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="border border-green-100 bg-green-50 rounded-lg p-4 flex items-center">
                            <div class="mr-4 p-3 bg-green-100 rounded-full">
                                <i class="fas fa-seedling text-green-600 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Demandes actives</p>
                                <p class="text-2xl font-bold text-gray-800">12</p>
                            </div>
                        </div>
                        <div class="border border-orange-100 bg-orange-50 rounded-lg p-4 flex items-center">
                            <div class="mr-4 p-3 bg-orange-100 rounded-full">
                                <i class="fas fa-handshake text-orange-500 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Contrats en cours</p>
                                <p class="text-2xl font-bold text-gray-800">8</p>
                            </div>
                        </div>
                        <div class="border border-blue-100 bg-blue-50 rounded-lg p-4 flex items-center">
                            <div class="mr-4 p-3 bg-blue-100 rounded-full">
                                <i class="fas fa-chart-line text-blue-500 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Économies AI (2024)</p>
                                <p class="text-2xl font-bold text-gray-800">3.2M FCFA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 md:col-span-1 flex flex-col justify-center bg-gradient-to-r from-green-100 to-green-50">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Nouvelle demande</h3>
                    <p class="text-gray-600 text-sm mb-4">Créez une nouvelle demande d'achat de produits agricoles</p>
                    <button id="newDemandBtn" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg flex items-center justify-center transition">
                        <i class="fas fa-plus mr-2"></i>
                        Créer demande
                    </button>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <!-- My Demands -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 lg:col-span-2">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Mes Demandes Récentes</h3>
                        <a href="#" class="text-green-600 text-sm hover:underline">Voir tout</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Produit</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Quantité</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Région</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @forelse ($demandes as $demande)



                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> {{ $demande->croptype->name }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5 tonnes</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ouest</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            En cours
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-green-600 hover:text-green-800 mr-3">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-orange-500 hover:text-orange-700">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Aucune demande assignée.</td>

                                </tr>


                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Market Price Forecast -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 lg:col-span-1">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Prévision des Prix</h3>
                        <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option>Maïs</option>
                            <option>Cacao</option>
                            <option>Riz</option>
                            <option>Haricot</option>
                        </select>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg mb-2">
                        <canvas id="priceChart"></canvas>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Moyenne region Ouest:</span>
                            <span class="font-medium">450 FCFA/kg</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Meilleur prix actuel:</span>
                            <span class="font-medium text-green-600">390 FCFA/kg</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Producers -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Producteurs Recommandés par AI</h3>
                    <a href="#" class="text-green-600 text-sm hover:underline">Voir plus</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Producer Card -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                        <div class="flex items-center mb-2">
                            <img src="https://placehold.co/60x60" alt="Producer" class="rounded-full mr-3">
                            <div>
                                <p class="font-semibold text-gray-800">Coopérative Cacao Douala</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Littoral, Douala V</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-sm mb-3 text-gray-600">
                            Spécialisé en cacao bio de qualité premium. Livraison garantie.
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-sm font-medium">4.8</span>
                                <span class="text-gray-400 text-xs ml-1">(32)</span>
                            </div>
                            <div class="tooltip">
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full progress-bar" style="width: 85%"></div>
                                </div>
                                <span class="tooltiptext">85% de fiabilité</span>
                            </div>
                        </div>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded text-sm flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2 text-xs"></i>
                            Contacter
                        </button>
                    </div>

                    <!-- Producer Card -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                        <div class="flex items-center mb-2">
                            <img src="https://placehold.co/60x60" alt="Producer" class="rounded-full mr-3">
                            <div>
                                <p class="font-semibold text-gray-800">Farmers Maïs Ouest</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Ouest, Bafoussam</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-sm mb-3 text-gray-600">
                            Coopérative avec 150 membres. Maïs non-OGM avec certification.
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-sm font-medium">4.5</span>
                                <span class="text-gray-400 text-xs ml-1">(28)</span>
                            </div>
                            <div class="tooltip">
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                                <span class="tooltiptext">78% de fiabilité</span>
                            </div>
                        </div>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded text-sm flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2 text-xs"></i>
                            Contacter
                        </button>
                    </div>

                    <!-- Producer Card -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                        <div class="flex items-center mb-2">
                            <img src="https://placehold.co/60x60" alt="Producer" class="rounded-full mr-3">
                            <div>
                                <p class="font-semibold text-gray-800">Agro Riz Yaoundé</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Centre, Yaoundé</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-sm mb-3 text-gray-600">
                            Production de riz local premium. Emballage sous vide disponible.
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-sm font-medium">4.9</span>
                                <span class="text-gray-400 text-xs ml-1">(45)</span>
                            </div>
                            <div class="tooltip">
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                                </div>
                                <span class="tooltiptext">92% de fiabilité</span>
                            </div>
                        </div>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded text-sm flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2 text-xs"></i>
                            Contacter
                        </button>
                    </div>

                    <!-- Producer Card -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                        <div class="flex items-center mb-2">
                            <img src="https://placehold.co/60x60" alt="Producer" class="rounded-full mr-3">
                            <div>
                                <p class="font-semibold text-gray-800">Bio Haricots Nord</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Nord, Garoua</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-sm mb-3 text-gray-600">
                            Haricots biologiques cultivés en rotation avec le sésame.
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-sm font-medium">4.3</span>
                                <span class="text-gray-400 text-xs ml-1">(19)</span>
                            </div>
                            <div class="tooltip">
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                                <span class="tooltiptext">75% de fiabilité</span>
                            </div>
                        </div>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded text-sm flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2 text-xs"></i>
                            Contacter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Map and Recent Contracts -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Map View -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 lg:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Producteurs par Région</h3>
                    <div class="bg-gray-50 p-4 rounded-lg h-64">
                        <div id="map" class="h-full flex items-center justify-center text-gray-400">
                            <i class="fas fa-map-marked-alt text-4xl mb-2"></i>
                            <p>Carte des producteurs</p>
                        </div>
                    </div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                            <i class="fas fa-circle text-orange-500 mr-1" style="font-size: 6px;"></i>
                            Ouest
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                            Littoral
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-circle text-blue-500 mr-1" style="font-size: 6px;"></i>
                            Centre
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            <i class="fas fa-circle text-purple-500 mr-1" style="font-size: 6px;"></i>
                            Sud
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            <i class="fas fa-circle text-yellow-500 mr-1" style="font-size: 6px;"></i>
                            Nord
                        </span>
                    </div>
                </div>

                <!-- Recent Contracts -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 lg:col-span-1">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Contrats Récents</h3>
                        <a href="#" class="text-green-600 text-sm hover:underline">Voir tout</a>
                    </div>
                    <div class="space-y-4">
                        <div class="border-l-4 border-green-500 pl-3 py-1">
                            <p class="text-sm font-medium text-gray-800">Cacao - 2.5 tonnes</p>
                            <p class="text-xs text-gray-500 mb-1">Coop. Cacao Douala</p>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>15/04/2024</span>
                                <span>450,000 FCFA</span>
                            </div>
                        </div>
                        <div class="border-l-4 border-orange-500 pl-3 py-1">
                            <p class="text-sm font-medium text-gray-800">Maïs - 8 tonnes</p>
                            <p class="text-xs text-gray-500 mb-1">Farmers Maïs Ouest</p>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>05/04/2024</span>
                                <span>3,200,000 FCFA</span>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 pl-3 py-1">
                            <p class="text-sm font-medium text-gray-800">Riz - 5 tonnes</p>
                            <p class="text-xs text-gray-500 mb-1">Agro Riz Yaoundé</p>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>28/03/2024</span>
                                <span>2,250,000 FCFA</span>
                            </div>
                        </div>
                        <div class="border-l-4 border-purple-500 pl-3 py-1">
                            <p class="text-sm font-medium text-gray-800">Haricots - 1 tonne</p>
                            <p class="text-xs text-gray-500 mb-1">Bio Haricots Nord</p>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>18/03/2024</span>
                                <span>650,000 FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- New Demand Modal (hidden by default) -->
    <div id="newDemandModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Nouvelle Demande</h3>
                <button id="closeModal" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Produit</label>
                    <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <option>Sélectionner un produit</option>
                        <option>Maïs</option>
                        <option>Cacao</option>
                        <option>Riz</option>
                        <option>Haricot</option>
                        <option>Banane plantain</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Quantité (kg)</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="ex: 1000">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Région préférée</label>
                    <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <option>Pas de préférence</option>
                        <option>Ouest</option>
                        <option>Littoral</option>
                        <option>Centre</option>
                        <option>Sud</option>
                        <option>Nord</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Date de livraison souhaitée</label>
                    <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" id="cancelModal" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</button>
                    <button type="button" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg">Soumettre</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Simple modal functionality
        const newDemandBtn = document.getElementById('newDemandBtn');
        const newDemandModal = document.getElementById('newDemandModal');
        const closeModal = document.getElementById('closeModal');
        const cancelModal = document.getElementById('cancelModal');

        newDemandBtn.addEventListener('click', () => {
            newDemandModal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            newDemandModal.classList.add('hidden');
        });

        cancelModal.addEventListener('click', () => {
            newDemandModal.classList.add('hidden');
        });

        // Simulate chart data (in a real app, use Chart.js or similar)
        document.addEventListener('DOMContentLoaded', function() {
            const chartCanvas = document.getElementById('priceChart');
            if (chartCanvas) {
                // This would be replaced with actual chart initialization
                chartCanvas.innerHTML = '<div class="flex items-center justify-center h-full text-gray-400"><p>Graphique des prix du maïs</p></div>';
            }
        });

        // Tooltip activation for reliability scores
        const tooltips = document.querySelectorAll('.tooltip');
        tooltips.forEach(tooltip => {
            tooltip.addEventListener('mouseenter', function() {
                const tooltipText = this.querySelector('.tooltiptext');
                tooltipText.style.visibility = 'visible';
                tooltipText.style.opacity = '1';
            });
            tooltip.addEventListener('mouseleave', function() {
                const tooltipText = this.querySelector('.tooltiptext');
                tooltipText.style.visibility = 'hidden';
                tooltipText.style.opacity = '0';
            });
        });
    </script>
</body>
</html>
