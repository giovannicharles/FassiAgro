<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Demandes | FassiAgro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles for status badges */
        .status-open {
            @apply bg-green-100 text-green-800;
        }
        .status-discussion {
            @apply bg-yellow-100 text-yellow-800;
        }
        .status-fulfilled {
            @apply bg-gray-100 text-gray-800;
        }

        /* Sticky header for table */
        .table-container {
            max-height: calc(100vh - 250px);
            overflow-y: auto;
        }

        /* Smooth transitions */
        .transition-smooth {
            transition: all 0.3s ease-in-out;
        }

        /* Custom shadow for cards */
        .custom-shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Card animation on hover */
        .demand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Mes Demandes</h1>
                <p class="text-gray-600 mt-2">Gérez vos demandes d'achat de cultures auprès des producteurs</p>
            </div>
            <button id="new-demand-btn" class="mt-4 md:mt-0 bg-emerald-600 hover:bg-emerald-700 transition-smooth text-white px-6 py-3 rounded-lg font-medium flex items-center">
                <i class="fas fa-plus-circle mr-2"></i>
                Créer une nouvelle demande
            </button>
        </div>

        <!-- Filter Bar -->
        <div class="bg-white rounded-xl custom-shadow p-6 mb-6">
            <h3 class="text-lg font-medium text-gray-700 mb-4">Filtrer les demandes</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Culture Filter -->
                <div>
                    <label for="culture-filter" class="block text-sm font-medium text-gray-700 mb-1">Culture</label>
                    <select id="culture-filter" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="">Toutes les cultures</option>
                        <option value="mais">Maïs</option>
                        <option value="riz">Riz</option>
                        <option value="ble">Blé</option>
                        <option value="tomate">Tomate</option>
                        <option value="oignon">Oignon</option>
                    </select>
                </div>

                <!-- Region Filter -->
                <div>
                    <label for="region-filter" class="block text-sm font-medium text-gray-700 mb-1">Région</label>
                    <select id="region-filter" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="">Toutes les régions</option>
                        <option value="casablanca">Casablanca-Settat</option>
                        <option value="fes">Fès-Meknès</option>
                        <option value="marrakech">Marrakech-Safi</option>
                        <option value="rabat">Rabat-Salé-Kénitra</option>
                        <option value="tanger">Tanger-Tétouan-Al Hoceïma</option>
                    </select>
                </div>

                <!-- Status Filter -->
                <div>
                    <label for="status-filter" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                    <select id="status-filter" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="">Tous les statuts</option>
                        <option value="open">Ouverte</option>
                        <option value="discussion">En discussion</option>
                        <option value="fulfilled">Satisfaite</option>
                    </select>
                </div>

                <!-- Date Filter -->
                <div>
                    <label for="date-filter" class="block text-sm font-medium text-gray-700 mb-1">Date de livraison</label>
                    <input type="month" id="date-filter" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <button id="reset-filters" class="text-emerald-600 hover:text-emerald-800 font-medium mr-4">
                    Réinitialiser
                </button>
                <button id="apply-filters" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg font-medium">
                    Appliquer les filtres
                </button>
            </div>
        </div>

        <!-- Mobile View - Cards -->
        <div class="md:hidden space-y-4">
            <!-- Demand Card 1 -->
            <div class="demand-card bg-white rounded-xl custom-shadow p-6 transition-smooth">
                <div class="flex justify-between items-start">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 mr-4">
                            <i class="fas fa-wheat-alt text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Maïs</h3>
                            <p class="text-sm text-gray-600">500 Tonnes | Casablanca-Settat</p>
                        </div>
                    </div>
                    <span class="status-open text-xs px-3 py-1 rounded-full font-medium">Ouverte</span>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="grid grid-cols-2 gap-4 mb-3">
                        <div>
                            <p class="text-xs text-gray-500">Date de livraison</p>
                            <p class="text-sm font-medium">15/12/2023</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Date de création</p>
                            <p class="text-sm font-medium">20/10/2023</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button class="action-btn text-emerald-600 hover:text-emerald-800 px-3 py-1 rounded" data-action="edit">
                            <i class="fas fa-pencil-alt mr-1"></i> Modifier
                        </button>
                        <button class="action-btn text-orange-500 hover:text-orange-700 px-3 py-1 rounded" data-action="producers">
                            <i class="fas fa-users mr-1"></i> Producteurs
                        </button>
                        <button class="action-btn text-red-500 hover:text-red-700 px-3 py-1 rounded" data-action="delete">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Demand Card 2 -->
            <div class="demand-card bg-white rounded-xl custom-shadow p-6 transition-smooth">
                <div class="flex justify-between items-start">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center text-orange-600 mr-4">
                            <i class="fas fa-carrot text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Tomate</h3>
                            <p class="text-sm text-gray-600">200 Tonnes | Fès-Meknès</p>
                        </div>
                    </div>
                    <span class="status-discussion text-xs px-3 py-1 rounded-full font-medium">En discussion</span>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="grid grid-cols-2 gap-4 mb-3">
                        <div>
                            <p class="text-xs text-gray-500">Date de livraison</p>
                            <p class="text-sm font-medium">10/11/2023</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Date de création</p>
                            <p class="text-sm font-medium">15/09/2023</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button class="action-btn text-emerald-600 hover:text-emerald-800 px-3 py-1 rounded" data-action="edit">
                            <i class="fas fa-pencil-alt mr-1"></i> Modifier
                        </button>
                        <button class="action-btn text-orange-500 hover:text-orange-700 px-3 py-1 rounded" data-action="producers">
                            <i class="fas fa-users mr-1"></i> Producteurs
                        </button>
                        <button class="action-btn text-red-500 hover:text-red-700 px-3 py-1 rounded" data-action="delete">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Demand Card 3 -->
            <div class="demand-card bg-white rounded-xl custom-shadow p-6 transition-smooth">
                <div class="flex justify-between items-start">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600 mr-4">
                            <i class="fas fa-seedling text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Blé</h3>
                            <p class="text-sm text-gray-600">300 Tonnes | Rabat-Salé-Kénitra</p>
                        </div>
                    </div>
                    <span class="status-fulfilled text-xs px-3 py-1 rounded-full font-medium">Satisfaite</span>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="grid grid-cols-2 gap-4 mb-3">
                        <div>
                            <p class="text-xs text-gray-500">Date de livraison</p>
                            <p class="text-sm font-medium">05/09/2023</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Date de création</p>
                            <p class="text-sm font-medium">15/07/2023</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button class="action-btn text-emerald-600 hover:text-emerald-800 px-3 py-1 rounded" data-action="edit">
                            <i class="fas fa-pencil-alt mr-1"></i> Modifier
                        </button>
                        <button class="action-btn text-orange-500 hover:text-orange-700 px-3 py-1 rounded" data-action="producers">
                            <i class="fas fa-users mr-1"></i> Producteurs
                        </button>
                        <button class="action-btn text-red-500 hover:text-red-700 px-3 py-1 rounded" data-action="delete">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop View - Table -->
        <div class="hidden md:block bg-white rounded-xl custom-shadow overflow-hidden">
            <div class="table-container">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 sticky top-0">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Culture</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Région</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Livraison</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 transition-smooth">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600">
                                        <i class="fas fa-wheat-alt"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Maïs</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">500 Tonnes</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Casablanca-Settat</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">15/12/2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-open px-3 py-1 rounded-full text-xs font-medium">Ouverte</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-emerald-600 hover:text-emerald-800 mr-3 action-btn" data-action="edit">
                                    <i class="fas fa-pencil-alt mr-1"></i>
                                </button>
                                <button class="text-orange-500 hover:text-orange-700 mr-3 action-btn" data-action="producers">
                                    <i class="fas fa-users mr-1"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 action-btn" data-action="delete">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50 transition-smooth">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-orange-50 rounded-lg flex items-center justify-center text-orange-600">
                                        <i class="fas fa-carrot"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Tomate</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">200 Tonnes</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Fès-Meknès</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">10/11/2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-discussion px-3 py-1 rounded-full text-xs font-medium">En discussion</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-emerald-600 hover:text-emerald-800 mr-3 action-btn" data-action="edit">
                                    <i class="fas fa-pencil-alt mr-1"></i>
                                </button>
                                <button class="text-orange-500 hover:text-orange-700 mr-3 action-btn" data-action="producers">
                                    <i class="fas fa-users mr-1"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 action-btn" data-action="delete">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50 transition-smooth">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600">
                                        <i class="fas fa-seedling"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Blé</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">300 Tonnes</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rabat-Salé-Kénitra</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">05/09/2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-fulfilled px-3 py-1 rounded-full text-xs font-medium">Satisfaite</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-emerald-600 hover:text-emerald-800 mr-3 action-btn" data-action="edit">
                                    <i class="fas fa-pencil-alt mr-1"></i>
                                </button>
                                <button class="text-orange-500 hover:text-orange-700 mr-3 action-btn" data-action="producers">
                                    <i class="fas fa-users mr-1"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 action-btn" data-action="delete">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-gray-500">
                Affichage <span class="font-medium">1</span> à <span class="font-medium">3</span> sur <span class="font-medium">3</span> demandes
            </div>
            <div class="flex space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>
                    <i class="fas fa-chevron-left mr-2"></i> Précédent
                </button>
                <button class="px-4 py-2 border border-emerald-500 bg-emerald-50 text-emerald-600 rounded-lg font-medium">
                    1
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>
                    Suivant <i class="fas fa-chevron-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Action button handlers
        document.querySelectorAll('.action-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.getAttribute('data-action');
                let message = '';

                switch(action) {
                    case 'edit':
                        message = 'Modification de la demande';
                        break;
                    case 'producers':
                        message = 'Affichage des producteurs correspondants';
                        break;
                    case 'delete':
                        message = 'Suppression de la demande';
                        break;
                }

                alert(`${message} (fonctionnalité à implémenter)`);
            });
        });

        // New demand button handler
        document.getElementById('new-demand-btn').addEventListener('click', function() {
            alert('Création d\'une nouvelle demande (fonctionnalité à implémenter)');
        });

        // Filter buttons handlers
        document.getElementById('apply-filters').addEventListener('click', function() {
            alert('Application des filtres (fonctionnalité à implémenter)');
        });

        document.getElementById('reset-filters').addEventListener('click', function() {
            document.getElementById('culture-filter').value = '';
            document.getElementById('region-filter').value = '';
            document.getElementById('status-filter').value = '';
            document.getElementById('date-filter').value = '';
        });
    </script>
</body>
</html>
