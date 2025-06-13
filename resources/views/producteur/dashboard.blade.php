@extends('layouts.app')
@section('title','Tableau de bord Producteur | FassiAgro')
@section('style')
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4CAF50',
                        secondary: '#FF9800',
                        darkgreen: '#2E7D32',
                        lightorange: '#FFE0B2',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
        .crop-icon {
            background-color: #E8F5E9;
            color: #2E7D32;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .price-up {
            color: #4CAF50;
        }
        .price-down {
            color: #F44336;
        }
        .price-stable {
            color: #FF9800;
        }
        .sidebar {
            transition: all 0.3s;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                top: 0;
                z-index: 50;
                height: 100vh;
            }
            .sidebar.active {
                left: 0;
            }
            .main-content {
                margin-left: 0 !important;
            }
        }
        .hamburger {
            display: none;
        }
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
        }
    </style>
@endsection()
@section('content')
<div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar bg-white w-64 shadow-md fixed h-full">
            <div class="p-4 flex items-center border-b">
                <img src="https://via.placeholder.com/40" alt="FassiAgro Logo" class="rounded-full mr-2">
                <span class="text-xl font-bold text-primary">FassiAgro</span>
            </div>
            <div class="p-4 text-xs text-gray-500 uppercase tracking-wider">Menu Principal</div>
            <nav class="mt-2">
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-primary bg-gray-50">
                    <i class="fas fa-tachometer-alt mr-3 text-primary"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-seedling mr-3"></i>
                    <span>Mes Offres</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Tendances des Prix</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-industry mr-3"></i>
                    <span>Acheteurs</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-user mr-3"></i>
                    <span>Profil</span>
                </a>
            </nav>
            <div class="absolute bottom-0 w-full p-4 border-t">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="User" class="rounded-full mr-2">
                    <div>
                        <p class="font-medium">Producteur</p>
                        <p class="text-xs text-gray-500">Cameroon</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-1 overflow-y-auto" style="margin-left: 16rem;">
            <!-- Header -->
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center">
                        <button class="hamburger mr-4 text-gray-700 focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-800">Tableau de bord Producteur</h1>
                    </div>
                    <div class="flex items-center">
                        <div class="relative mr-4">
                            <i class="fas fa-bell text-gray-500 text-xl"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2 text-sm font-medium">Bonjour, Producteur</span>
                            <img src="https://via.placeholder.com/32" alt="User" class="rounded-full">
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-4 md:p-6">
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Offres Actives</p>
                                <p class="text-2xl font-bold">12</p>
                            </div>
                            <div class="crop-icon">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Acheteurs Intéressés</p>
                                <p class="text-2xl font-bold">8</p>
                            </div>
                            <div class="crop-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Prochaines Récoltes</p>
                                <p class="text-2xl font-bold">3</p>
                            </div>
                            <div class="crop-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Action -->
                <div class="mb-6">
                    <button class="w-full md:w-auto bg-primary hover:bg-darkgreen text-white font-medium py-3 px-6 rounded-lg shadow-md transition duration-300 flex items-center">
                        <i class="fas fa-plus-circle mr-2"></i> Ajouter une Nouvelle Offre
                    </button>
                </div>

                <!-- Main Dashboard Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- My Active Offers -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-shopping-basket text-primary mr-2"></i>
                                Mes Offres Actives
                            </h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Produit</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Quantité</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Région</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Disponibilité</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center">
                                                <i class="fas fa-apple-alt text-green-600 mr-2"></i>
                                                <span>Bananes Plantains</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">250 kg</td>
                                        <td class="px-4 py-3">Littoral</td>
                                        <td class="px-4 py-3">15 Juin 2023</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center">
                                                <i class="fas fa-coffee text-brown-600 mr-2"></i>
                                                <span>Cacao</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">500 kg</td>
                                        <td class="px-4 py-3">Sud-Ouest</td>
                                        <td class="px-4 py-3">05 Juillet 2023</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center">
                                                <i class="fas fa-leaf text-green-700 mr-2"></i>
                                                <span>Tomates</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">120 kg</td>
                                        <td class="px-4 py-3">Ouest</td>
                                        <td class="px-4 py-3">22 Juin 2023</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center">
                                                <i class="fas fa-pepper-hot text-red-600 mr-2"></i>
                                                <span>Piments</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">80 kg</td>
                                        <td class="px-4 py-3">Centre</td>
                                        <td class="px-4 py-3">10 Juillet 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-4 border-t text-center">
                            <a href="#" class="text-primary hover:underline text-sm">Voir toutes les offres</a>
                        </div>
                    </div>

                    <!-- Price Predictions -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-chart-line text-primary mr-2"></i>
                                Prévisions des Prix (Prochain Mois)
                            </h2>
                        </div>
                        <div class="p-4">
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span>Bananes Plantains (Littoral)</span>
                                    <span class="font-medium">800 XAF/kg <i class="fas fa-caret-up price-up ml-1"></i> (+12%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span>Cacao (Sud-Ouest)</span>
                                    <span class="font-medium">1,200 XAF/kg <i class="fas fa-caret-down price-down ml-1"></i> (-5%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-orange-500 h-2 rounded-full" style="width: 55%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span>Tomates (Ouest)</span>
                                    <span class="font-medium">500 XAF/kg <i class="fas fa-equals price-stable ml-1"></i> (stable)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span>Piments (Centre)</span>
                                    <span class="font-medium">1,500 XAF/kg <i class="fas fa-caret-up price-up ml-1"></i> (+20%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-50 border-t">
                            <p class="text-xs text-gray-600">*Prévisions basées sur l'analyse des données historiques et des tendances du marché</p>
                        </div>
                    </div>

                    <!-- Interested Buyers -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-industry text-primary mr-2"></i>
                                Acheteurs Intéressés
                            </h2>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Buyer" class="rounded-full mr-3">
                                        <div>
                                            <p class="font-medium">Industrie AgroLittoral</p>
                                            <p class="text-sm text-gray-600">Intéressé par: Bananes Plantains</p>
                                        </div>
                                    </div>
                                    <div class="text-xs px-2 py-1 bg-primary text-white rounded-full">Nouveau</div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Buyer" class="rounded-full mr-3">
                                        <div>
                                            <p class="font-medium">ChocoCam S.A.</p>
                                            <p class="text-sm text-gray-600">Intéressé par: Cacao</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-xs px-2 py-1 bg-primary text-white rounded-full">Message</button>
                                        <button class="text-xs px-2 py-1 bg-secondary text-white rounded-full">Détails</button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Buyer" class="rounded-full mr-3">
                                        <div>
                                            <p class="font-medium">Conserverie du Centre</p>
                                            <p class="text-sm text-gray-600">Intéressé par: Tomates</p>
                                        </div>
                                    </div>
                                    <button class="text-xs px-2 py-1 bg-secondary text-white rounded-full">Détails</button>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Buyer" class="rounded-full mr-3">
                                        <div>
                                            <p class="font-medium">Epices Tropicales</p>
                                            <p class="text-sm text-gray-600">Intéressé par: Piments</p>
                                        </div>
                                    </div>
                                    <button class="text-xs px-2 py-1 bg-primary text-white rounded-full">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Harvest Calendar -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-calendar-alt text-primary mr-2"></i>
                                Calendrier des Récoltes
                            </h2>
                        </div>
                        <div class="p-4">
                            <div class="divide-y divide-gray-200">
                                <div class="py-2">
                                    <div class="flex items-center">
                                        <div class="mr-4 text-center">
                                            <p class="text-sm font-bold">15</p>
                                            <p class="text-xs">Juin</p>
                                        </div>
                                        <div>
                                            <p class="font-medium">Bananes Plantains</p>
                                            <p class="text-sm text-gray-600">Littoral • 250 kg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="flex items-center">
                                        <div class="mr-4 text-center">
                                            <p class="text-sm font-bold">22</p>
                                            <p class="text-xs">Juin</p>
                                        </div>
                                        <div>
                                            <p class="font-medium">Tomates</p>
                                            <p class="text-sm text-gray-600">Ouest • 120 kg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="flex items-center">
                                        <div class="mr-4 text-center">
                                            <p class="text-sm font-bold">05</p>
                                            <p class="text-xs">Juil</p>
                                        </div>
                                        <div>
                                            <p class="font-medium">Cacao</p>
                                            <p class="text-sm text-gray-600">Sud-Ouest • 500 kg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="flex items-center">
                                        <div class="mr-4 text-center">
                                            <p class="text-sm font-bold">10</p>
                                            <p class="text-xs">Juil</p>
                                        </div>
                                        <div>
                                            <p class="font-medium">Piments</p>
                                            <p class="text-sm text-gray-600">Centre • 80 kg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-t">
                            <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-calendar-plus mr-2"></i> Ajouter au Calendrier
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection()
@section('script')
<script>
     window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('bg-gray-50');
        });
        // Toggle mobile sidebar
        document.querySelector('.hamburger').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Simulate price prediction chart (for demo purposes)
        function simulatePriceChanges() {
            const priceChanges = document.querySelectorAll('.price-up, .price-down, .price-stable');
            priceChanges.forEach(el => {
                setTimeout(() => {
                    if(el.classList.contains('price-up')) {
                        el.classList.remove('price-up');
                        el.classList.add('price-stable');
                        el.classList.replace('fa-caret-up', 'fa-equals');
                    } else if(el.classList.contains('price-down')) {
                        el.classList.remove('price-down');
                        el.classList.add('price-up');
                        el.classList.replace('fa-caret-down', 'fa-caret-up');
                    } else {
                        el.classList.remove('price-stable');
                        el.classList.add('price-down');
                        el.classList.replace('fa-equals', 'fa-caret-down');
                    }
                }, 3000);
            });
        }

        // Run the simulation every 5 seconds
        setInterval(simulatePriceChanges, 5000);

        // Simple notification for the "Add New Offer" button
        document.querySelector('button:contains("Ajouter une Nouvelle Offre")')?.addEventListener('click', function() {
            alert('Ouvrir le formulaire pour ajouter une nouvelle offre');
        });
    </script>
@endsection()
