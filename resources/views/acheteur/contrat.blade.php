<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FassiAgro | Tableau de bord Acheteur - Contrats</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Tab animation */
        .tab-active {
            position: relative;
        }
        .tab-active:after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #22c55e;
            animation: tab-border 0.3s ease-out;
        }
        @keyframes tab-border {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }

        /* Pulse animation for active contracts */
        .pulse-active {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <i class="fas fa-leaf text-green-500 text-2xl"></i>
                        <span class="ml-2 text-xl font-semibold text-gray-800">FassiAgro</span>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="#" class="text-gray-500 hover:text-gray-700">Tableau de bord</a>
                        <a href="#" class="text-green-600 font-medium">Contrats</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700">Fournisseurs</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700">Analytics</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-500 rounded-full hover:bg-gray-100">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="flex items-center">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <span class="ml-2 text-sm font-medium text-gray-700 hidden md:inline">Mohamed El Amrani</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Contrats</h1>
                        <p class="mt-1 text-sm text-gray-500">Suivez et gérez vos contrats avec les producteurs</p>
                    </div>
                    <div class="mt-4 md:mt-0 space-x-3">
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <i class="fas fa-download mr-2"></i>Exporter
                        </button>
                        <button class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <i class="fas fa-plus mr-2"></i>Nouveau contrat
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="-mb-px flex space-x-8">
                        <a href="#" id="active-tab" class="tab-active whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-green-600 border-green-500">
                            Contrats actifs
                        </a>
                        <a href="#" id="history-tab" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Historique
                        </a>
                    </nav>
                </div>

                <!-- Search and Filters -->
                <div class="mb-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="relative rounded-md shadow-sm w-full md:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" name="search" id="search" class="focus:ring-green-500 focus:border-green-500 block w-full pl-10 pr-12 py-2 sm:text-sm border-gray-300 rounded-md" placeholder="Rechercher...">
                        </div>
                        <div class="flex space-x-3">
                            <select id="filter-status" class="focus:ring-green-500 focus:border-green-500 block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md">
                                <option>Tous les statuts</option>
                                <option>En cours</option>
                                <option>Terminé</option>
                                <option>Annulé</option>
                            </select>
                            <select id="filter-date" class="focus:ring-green-500 focus:border-green-500 block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md">
                                <option>Toutes les dates</option>
                                <option>Ce mois</option>
                                <option>Ce trimestre</option>
                                <option>Cette année</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contracts Section - Cards View -->
                <div id="active-contracts" class="space-y-6">
                    <!-- Contract Card 1 -->
                    <div class="bg-white overflow-hidden shadow rounded-lg pulse-active">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-start">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Contrat #FASSI0001452
                                </h3>
                                <div class="mt-1 flex flex-wrap gap-2 text-sm text-gray-500">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        En cours
                                    </span>
                                    <span class="inline-flex items-center text-gray-500">
                                        <i class="fas fa-calendar-alt mr-1.5 text-gray-400"></i>
                                        Signé le 15/05/2023
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-file-pdf mr-1.5 text-red-500"></i> PDF
                                </button>
                                <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-comment-dots mr-1.5"></i> Contacter
                                </button>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Producteur
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        Ahmed Benali (AgriBio Fès)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Culture & Quantité
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Tomates cerises bio - 1,200 kg
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Prix négocié
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        12,500 DHS (10.42 DHS/kg)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Livraison
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <span class="flex items-center">
                                                <i class="fas fa-truck mr-2 text-gray-400"></i>
                                                Prévue: 25/06/2023
                                            </span>
                                            <span class="mx-2 text-gray-300">|</span>
                                            <span class="text-gray-500 flex items-center">
                                                <i class="fas fa-check-circle mr-1.5 text-green-500"></i>
                                                30% livré
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Contract Card 2 -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-start">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Contrat #FASSI0001398
                                </h3>
                                <div class="mt-1 flex flex-wrap gap-2 text-sm text-gray-500">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        En cours
                                    </span>
                                    <span class="inline-flex items-center text-gray-500">
                                        <i class="fas fa-calendar-alt mr-1.5 text-gray-400"></i>
                                        Signé le 02/04/2023
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-file-pdf mr-1.5 text-red-500"></i> PDF
                                </button>
                                <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-comment-dots mr-1.5"></i> Contacter
                                </button>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Producteur
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        Fatima Zahra El Idrissi (Ferme Souss)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Culture & Quantité
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Avocats Hass - 800 kg
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Prix négocié
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        24,000 DHS (30 DHS/kg)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Livraison
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <span class="flex items-center">
                                                <i class="fas fa-truck mr-2 text-gray-400"></i>
                                                Prévue: 10/07/2023
                                            </span>
                                            <span class="mx-2 text-gray-300">|</span>
                                            <span class="text-gray-500 flex items-center">
                                                <i class="fas fa-clock mr-1.5 text-yellow-500"></i>
                                                En attente
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Hidden History Contracts Section -->
                <div id="history-contracts" class="hidden space-y-6">
                    <!-- Historical Contract Card 1 -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-start">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Contrat #FASSI0001123
                                </h3>
                                <div class="mt-1 flex flex-wrap gap-2 text-sm text-gray-500">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        Terminé
                                    </span>
                                    <span class="inline-flex items-center text-gray-500">
                                        <i class="fas fa-calendar-alt mr-1.5 text-gray-400"></i>
                                        Signé le 12/01/2023
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-file-pdf mr-1.5 text-red-500"></i> PDF
                                </button>
                                <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-comment-dots mr-1.5"></i> Contacter
                                </button>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Producteur
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        Hassan Boukili (Domaine Rif)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Culture & Quantité
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Fraises - 500 kg
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Prix négocié
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        15,000 DHS (30 DHS/kg)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Livraison
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <span class="flex items-center">
                                                <i class="fas fa-truck mr-2 text-gray-400"></i>
                                                Terminée: 05/03/2023
                                            </span>
                                            <span class="mx-2 text-gray-300">|</span>
                                            <span class="text-gray-500 flex items-center">
                                                <i class="fas fa-check-circle mr-1.5 text-green-500"></i>
                                                100% livré
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Historical Contract Card 2 -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-start">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Contrat #FASSI0000987
                                </h3>
                                <div class="mt-1 flex flex-wrap gap-2 text-sm text-gray-500">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Annulé
                                    </span>
                                    <span class="inline-flex items-center text-gray-500">
                                        <i class="fas fa-calendar-alt mr-1.5 text-gray-400"></i>
                                        Signé le 20/11/2022
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-file-pdf mr-1.5 text-red-500"></i> PDF
                                </button>
                                <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-comment-dots mr-1.5"></i> Contacter
                                </button>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Producteur
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        Karima Khoulal (Verger Atlas)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Culture & Quantité
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Pommes Golden - 1,500 kg
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Prix négocié
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        30,000 DHS (20 DHS/kg)
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Livraison
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <span class="flex items-center">
                                                <i class="fas fa-times-circle mr-2 text-red-500"></i>
                                                Annulée: 15/12/2022
                                            </span>
                                            <span class="mx-2 text-gray-300">|</span>
                                            <span class="text-gray-500 flex items-center">
                                                <i class="fas fa-info-circle mr-1.5 text-red-500"></i>
                                                0% livré
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Mobile action button -->
                <div class="fixed bottom-6 right-6 md:hidden">
                    <button class="p-4 bg-green-600 text-white rounded-full shadow-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        <i class="fas fa-plus text-xl"></i>
                    </button>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center">
                        <i class="fas fa-leaf text-green-500 text-xl"></i>
                        <span class="ml-2 text-lg font-semibold text-gray-800">FassiAgro</span>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <p class="text-center text-sm text-gray-500">
                            &copy; 2023 FassiAgro Platform. Tous droits réservés.
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Tab switching functionality
        document.getElementById('active-tab').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('active-contracts').classList.remove('hidden');
            document.getElementById('history-contracts').classList.add('hidden');

            document.getElementById('active-tab').classList.add('tab-active', 'text-green-600', 'border-green-500');
            document.getElementById('active-tab').classList.remove('text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');

            document.getElementById('history-tab').classList.remove('tab-active', 'text-green-600', 'border-green-500');
            document.getElementById('history-tab').classList.add('text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
        });

        document.getElementById('history-tab').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('active-contracts').classList.add('hidden');
            document.getElementById('history-contracts').classList.remove('hidden');

            document.getElementById('history-tab').classList.add('tab-active', 'text-green-600', 'border-green-500');
            document.getElementById('history-tab').classList.remove('text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');

            document.getElementById('active-tab').classList.remove('tab-active', 'text-green-600', 'border-green-500');
            document.getElementById('active-tab').classList.add('text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
        });

        // Search functionality
        document.getElementById('search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const contracts = document.querySelectorAll('#active-contracts > div, #history-contracts > div');

            contracts.forEach(contract => {
                const contractText = contract.textContent.toLowerCase();
                if (contractText.includes(searchTerm)) {
                    contract.classList.remove('hidden');
                } else {
                    contract.classList.add('hidden');
                }
            });
        });

        // Filter by status
        document.getElementById('filter-status').addEventListener('change', function() {
            const status = this.value;
            const contracts = document.querySelectorAll('#active-contracts > div, #history-contracts > div');

            contracts.forEach(contract => {
                const contractStatus = contract.querySelector('span.bg-green-100, span.bg-blue-100, span.bg-red-100').textContent;

                if (status === 'Tous les statuts' || contractStatus.includes(status)) {
                    contract.classList.remove('hidden');
                } else {
                    contract.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
