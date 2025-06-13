<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FassiAgro - L'agriculture camerounaise à l'ère de l'IA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae');
            background-size: cover;
            background-position: center;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-preview {
            background-image: linear-gradient(to right, #2d9735, #8dc63f);
        }

        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: scale(1.02);
        }

        .floating-chat {
            transition: all 0.3s ease;
        }

        .floating-chat:hover {
            transform: scale(1.1);
        }

        .chat-container {
            transform: scale(0);
            opacity: 0;
            transition: all 0.3s ease;
            transform-origin: bottom right;
        }

        .chat-container.active {
            transform: scale(1);
            opacity: 1;
        }

        .gradient-text {
            background: linear-gradient(45deg, #2d9735, #8dc63f);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        .stats-section {
            background: linear-gradient(135deg, #2d9735 0%, #8dc63f 100%);
        }

        .yellow-button {
            background-color: #eab308;
            color: white;
        }

        .yellow-button:hover {
            background-color: #eab308;
        }
        .chat-container,.floating-chat{
            z-index:1000;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-emerald-800 shadow-md sticky top-0 z-50 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-leaf text-3xl mr-2 text-yellow-300"></i>
                        <span class="text-xl font-bold">Fassi<span class="text-yellow-300">Agro</span></span>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-gray-200 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-white hover:text-yellow-300 transition">Accueil</a>
                    <a href="#about" class="text-white hover:text-yellow-300 transition">À propos</a>
                    <a href="#problem" class="text-white hover:text-yellow-300 transition">Problématique</a>
                    <a href="#features" class="text-white hover:text-yellow-300 transition">Fonctionnalités</a>
                    <a href="#impact" class="text-white hover:text-yellow-300 transition">Impact</a>
                    <a href="#team" class="text-white hover:text-yellow-300 transition">Équipe</a>
                    <a href="#contact"
                        class="px-4 py-2 text-yellow-300 font-medium border border-yellow-300 rounded-lg hover:bg-yellow-300 hover:text-emerald-800 transition">Contact</a>
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 text-white font-medium yellow-button rounded-lg hover:opacity-90 transition">S'inscrire</a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
                <a href="#home" class="block py-2 text-white hover:text-yellow-300 transition">Accueil</a>
                <a href="#about" class="block py-2 text-white hover:text-yellow-300 transition">À propos</a>
                <a href="#problem" class="block py-2 text-white hover:text-yellow-300 transition">Problématique</a>
                <a href="#features" class="block py-2 text-white hover:text-yellow-300 transition">Fonctionnalités</a>
                <a href="#market" class="text-white hover:text-yellow-300 font-medium transition">Marché</a>
                <a href="#impact" class="block py-2 text-white hover:text-yellow-300 transition">Impact</a>
                <a href="#testimonials" class="text-white hover:text-yellow-300 font-medium transition">Témoignages</a>
                <a href="#contact"
                    class="block bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full transition mt-2 text-center w-32">Contact</a>
                <a href="#contact"
                    class="block bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full transition mt-2 text-center w-32">S'inscrire</a>

            </div>
        </div>


    </nav>


    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center justify-center text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fadeInUp">L'agriculture camerounaise à l'ère de <span
                    class="gradient-text">l'intelligence artificielle</span></h1>
            <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto">FassiAgro connecte les producteurs et les acheteurs
                grâce à une plateforme intelligente et accessible.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="px-8 py-4 bg-white text-emerald-700 font-bold rounded-lg hover:bg-gray-100 transition flex items-center justify-center">
                    <span>Essayer la plateforme</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#"
                    class="px-8 py-4 bg-transparent text-white font-bold border border-white rounded-lg hover:bg-white hover:text-emerald-700 transition flex items-center justify-center">
                    <span>Voir la démo</span>
                    <i class="fas fa-play-circle ml-2"></i>
                </a>
            </div>
        </div>

        <!-- Floating FassiBot Icon -->
        <div class="floating-chat fixed bottom-8 right-8 w-16 h-16 bg-emerald-700 rounded-full flex items-center justify-center text-white shadow-xl cursor-pointer pulse"
            id="chat-button">
            <i class="fas fa-robot text-2xl"></i>
        </div>

        <!-- Chat Container -->
        <div class="chat-container fixed bottom-28 right-8 w-80 bg-white rounded-lg shadow-xl overflow-hidden"
            id="chat-container">
            <div class="bg-emerald-700 p-4 text-white">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <i class="fas fa-robot mr-2"></i>
                        <h3 class="font-bold">FassiBot</h3>
                    </div>
                    <button id="close-chat" class="text-white hover:text-gray-200">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <p class="text-xs mt-1">Assistant intelligent pour l'agriculture camerounaise</p>
            </div>
            <div class="h-64 p-4 overflow-y-auto bg-gray-50" id="chat-messages">
                <div class="flex mb-4">
                    <div class="w-8 h-8 bg-emerald-700 rounded-full flex items-center justify-center text-white mr-2">
                        <i class="fas fa-robot text-xs"></i>
                    </div>
                    <div class="bg-gray-100 p-3 rounded-lg max-w-xs">
                        <p class="text-sm text-gray-800">Bonjour! Je suis FassiBot, votre assistant agricole intelligent. Comment
                            puis-je vous aider aujourd'hui?</p>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-gray-200">
                <div class="relative">
                    <input type="text" placeholder="Poser une question..."
                        class="w-full text-gray-800 p-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-700 focus:border-transparent">
                    <button class="absolute right-3 top-3 text-yellow-500 hover:text-emerald-700">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
                <p class="text-xs text-gray-500 mt-2">FassiBot est gratuit et disponible même sans connexion</p>
            </div>
        </div>
    </section>
    <!-- Apropos -->
    <section id="about" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Texte -->
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">À propos de <span
                            class="text-emerald-700">FassiAgro</span></h2>
                    <p class="text-gray-600 mb-4">
                        FassiAgro est une plateforme numérique intelligente conçue pour moderniser l’agriculture
                        camerounaise en connectant directement les petits producteurs aux acheteurs professionnels
                        (coopératives, agro-industries, exportateurs).
                    </p>
                    <p class="text-gray-600 mb-4">
                        Grâce à l’intelligence artificielle, FassiAgro prédit les prix des cultures, facilite les
                        échanges via une messagerie intégrée, et alerte les utilisateurs en temps réel lorsqu’un
                        acheteur ou une opportunité correspond à leurs besoins.
                    </p>
                    <div class="bg-emerald-50 border-l-4 border-emerald-600 p-4 mb-6 rounded-md shadow-sm">
                        <p class="text-emerald-800 font-semibold italic text-lg">
                            Notre objectif : <span class="font-bold text-emerald-900">simplifier, sécuriser et
                                dynamiser</span> la chaîne de valeur agricole – du <span
                                style="color: #eab308;">champ</span> au <span style="color: #eab308;">marché</span> –
                            en Afrique centrale.
                        </p>
                    </div>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <p class="text-gray-700 italic">"Fassi" signifie "cultiver" en langue locale, incarnant notre
                            engagement envers une agriculture enracinée, connectée et tournée vers l’avenir.</p>
                    </div>

                    <a href="#contact"
                        class="inline-block bg-emerald-700 hover:bg-emerald-800 text-white px-6 py-2 rounded-full transition shadow-md">
                        Rejoignez-nous
                    </a>
                </div>

                <!-- Image + Vision -->
                <div class="md:w-1/2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80"
                            alt="Agriculteur africain connecté" class="rounded-lg shadow-xl w-full">
                        <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg w-2/3">
                            <h3 class="font-bold text-emerald-800 mb-2">Notre vision</h3>
                            <p class="text-gray-600 text-sm">
                                Devenir la référence africaine en matière de digitalisation agricole inclusive, durable
                                et pilotée par l’intelligence artificielle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fonctionnalités Clés de <span
                        class="text-emerald-700">Fassi</span><span class="text-yellow-500">Agro</span>?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Une plateforme intelligente qui transforme
                    l'agriculture traditionnelle grâce à la technologie.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mb-6">
                        <i class="fas fa-seedling text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Publier une offre</h3>
                    <p class="text-gray-600">Les producteurs peuvent facilement publier leurs récoltes disponibles avec
                        photos et descriptions détaillées.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-500 mb-6">
                        <i class="fas fa-industry text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Trouver des producteurs fiables</h3>
                    <p class="text-gray-600">Notre algorithme d'IA vous propose les producteurs les mieux adaptés à vos
                        besoins avec notation et historique.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mb-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Obtenir des prévisions de prix</h3>
                    <p class="text-gray-600">Nos modèles prédictifs analysent les tendances pour vous donner les
                        meilleures estimations de prix du marché.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-500 mb-6">
                        <i class="fas fa-comments text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Messagerie directe</h3>
                    <p class="text-gray-600">Communiquez en temps réel avec vos partenaires commerciaux via notre
                        système de messagerie sécurisé.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mb-6">
                        <i class="fas fa-brain text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Suggestions basées sur l'IA</h3>
                    <p class="text-gray-600">FassiAgro analyse vos comportements pour vous proposer des partenaires et
                        opportunités pertinents.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div
                        class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-500 mb-6">
                        <i class="fas fa-bell text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Alertes intelligentes</h3>
                    <p class="text-gray-600">Recevez des notifications personnalisées lorsque vos critères sont
                        satisfaits sur le marché.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Demo Section -->
    <section id="demo" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Découvrez notre <span
                        class="gradient-text">plateforme intelligente</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Conçue pour une expérience utilisateur intuitive et
                    riche en fonctionnalités.</p>
            </div>

            <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-2xl">
                <div class="bg-gray-800 p-4 flex items-center">
                    <div class="flex space-x-2 mr-4">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="flex-1 bg-gray-700 rounded-lg px-4 py-2 text-sm text-gray-300">
                        https://app.fassiagro.cm/dashboard</div>
                </div>

                <div class="dashboard-preview p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <div
                                    class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mr-4">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="text-xl font-bold">Tableau Producteur</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-box-open text-emerald-700 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Mes offres</p>
                                        <p class="text-sm text-gray-600">5 offres actives</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-chart-bar text-emerald-700 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Prix prédits</p>
                                        <p class="text-sm text-gray-600">Analyse pour les 30 prochains jours</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-bell text-emerald-700 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Demandes correspondantes</p>
                                        <p class="text-sm text-gray-600">12 acheteurs intéressés</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <div
                                    class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-500 mr-4">
                                    <i class="fas fa-industry"></i>
                                </div>
                                <h3 class="text-xl font-bold">Tableau Acheteur</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-search text-yellow-500 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Mes demandes</p>
                                        <p class="text-sm text-gray-600">3 demandes actives</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-users text-yellow-500 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Producteurs suggérés</p>
                                        <p class="text-sm text-gray-600">8 producteurs fiables</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                                <div class="flex items-center bg-gray-50 p-3 rounded-lg">
                                    <i class="fas fa-globe-africa text-yellow-500 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="font-medium">Marché international</p>
                                        <p class="text-sm text-gray-600">Tendances des cours mondiaux</p>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="problem" class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Problématique & <span
                        class="text-emerald-700">Solution FassiAgro</span></h2>
                <div class="w-24 h-1 bg-emerald-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Colonne 1 : Problèmes -->
                <div>
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="bg-red-100 p-3 rounded-full mr-4">
                                <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Les défis agricoles au Cameroun</h3>
                        </div>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-circle text-xs text-red-500 mt-2 mr-3"></i>
                                <span>Manque de lien direct entre petits producteurs et acheteurs industriels</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-circle text-xs text-red-500 mt-2 mr-3"></i>
                                <span>Difficulté à prévoir les prix du marché et à planifier les récoltes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-circle text-xs text-red-500 mt-2 mr-3"></i>
                                <span>Absence de conseil technique en temps réel accessible aux producteurs</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-circle text-xs text-red-500 mt-2 mr-3"></i>
                                <span>Manque de transparence sur les disponibilités agricoles locales</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Colonne 2 : Solutions -->
                <div>
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-lightbulb text-emerald-500 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">La réponse intelligente de FassiAgro</h3>
                        </div>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-xs text-emerald-500 mt-2 mr-3"></i>
                                <span>Plateforme B2B facilitant les échanges directs entre producteurs et
                                    acheteurs</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-xs text-emerald-500 mt-2 mr-3"></i>
                                <span>Prévisions de prix locales et internationales grâce à l’intelligence
                                    artificielle</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-xs text-emerald-500 mt-2 mr-3"></i>
                                <span>Assistant virtuel gratuit <strong>FassiBot</strong> pour informer sur les périodes
                                    agricoles et les tendances</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-xs text-emerald-500 mt-2 mr-3"></i>
                                <span>Alertes personnalisées (prix, acheteurs proches) et messagerie interne
                                    simplifiée</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FassiBot Section -->
    <section class="py-20 stats-section text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">FassiBot: Votre assistant agricole intelligent</h2>
                    <p class="text-xl mb-8">Posez vos questions en temps réel sur les cours du marché, les techniques
                        culturales, ou les opportunités commerciales. FassiBot vous répond instantanément en analysant
                        nos bases de données et l'actualité agricole.</p>
                    <div class="bg-white/20 p-4 rounded-lg mb-8">
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-emerald-700 mr-4">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <p class="text-sm">Exemple: "Quel est le prix actuel du cacao dans la région du Centre ?"
                            </p>
                        </div>
                    </div>
                    <a href="#"
                        class="px-8 py-3 bg-white text-emerald-700 font-bold rounded-lg hover:bg-gray-100 transition inline-flex items-center">
                        <span>Démarrer une conversation</span>
                        <i class="fas fa-comment-dots ml-2"></i>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                        <div class="bg-gray-800 p-3 flex items-center">
                            <div class="flex space-x-2 mr-4">
                                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            </div>
                            <p class="text-xs text-gray-300">FassiBot - Assistant conversationnel</p>
                        </div>
                        <div class="p-4 h-64 flex flex-col justify-end">
                            <div class="space-y-2">
                                <div class="flex">
                                    <div class="bg-gray-50 border border-gray-200 shadow-sm p-3 rounded-lg max-w-xs">
                                        <p class="text-sm text-gray-800">Bonjour! Quel produit agricole vous intéresse
                                            aujourd'hui?</p>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <div class="bg-emerald-700 p-3 rounded-lg max-w-xs">
                                        <p class="text-sm text-white">Je cherche des informations sur le maïs</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="bg-gray-50 border border-gray-200 shadow-sm p-3 rounded-lg max-w-xs">
                                        <p class="text-sm text-gray-800">Voici les infos actuelles sur le maïs au
                                            Cameroun...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-200">
                            <div class="relative">
                                <input type="text" placeholder="Poser une question à FassiBot..."
                                    class="w-full p-2 pl-4 pr-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-emerald-700 focus:border-transparent text-sm">
                                <button class="absolute right-4 top-2 text-yellow-500">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart Alerts Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Alertes et Notifications <span
                            class="gradient-text">Intelligentes</span></h2>
                    <p class="text-xl text-gray-600 mb-8">Configurez vos critères et recevez des alertes instantanées
                        lorsque des opportunités correspondent à vos besoins.</p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mr-4 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Alertes prix</h4>
                                <p class="text-gray-600">Quand le prix de votre produit dépasse votre seuil</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mr-4 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Nouveaux acheteurs</h4>
                                <p class="text-gray-600">Quand des acheteurs cherchent vos produits dans votre région
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 mr-4 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Anomalies de qualité</h4>
                                <p class="text-gray-600">Quand des rapports signalent des problèmes dans votre zone</p>
                            </div>
                        </li>
                    </ul>

                    <a href="#"
                        class="px-6 py-3 yellow-button font-bold rounded-lg hover:opacity-90 transition inline-flex items-center">
                        <span>Configurer mes alertes</span>
                        <i class="fas fa-cog ml-2"></i>
                    </a>
                </div>

                <div class="lg:w-1/2">
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <i class="fas fa-bell text-2xl text-yellow-500 mr-3"></i>
                            <h3 class="text-xl font-bold text-gray-800">Mes Alertes</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start p-4 bg-emerald-50 rounded-lg border-l-4 border-emerald-700">
                                <i class="fas fa-money-bill-wave text-emerald-700 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Le prix du cacao a augmenté de 15%</p>
                                    <p class="text-sm text-gray-600">Le prix moyen est maintenant à 1 250 FCFA/kg.
                                        C'est le bon moment pour vendre!</p>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">10 min</span>
                            </div>

                            <div class="flex items-start p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                                <i class="fas fa-user-tag text-yellow-500 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Nouvel acheteur dans votre région</p>
                                    <p class="text-sm text-gray-600">ChocoCam recherche 5 tonnes de cacao avec
                                        certification biologique.</p>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">45 min</span>
                            </div>

                            <div class="flex items-start p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                                <i class="fas fa-cloud-sun text-blue-500 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Alerte météo importante</p>
                                    <p class="text-sm text-gray-600">Pluies intenses prévues dans 48h. Protégez vos
                                        récoltes.</p>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">2h</span>
                            </div>

                            <div class="flex items-start p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                                <i class="fas fa-chart-line text-purple-500 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Marché international</p>
                                    <p class="text-sm text-gray-600">Les cours mondiaux du cacao montrent une tendance
                                        haussière.</p>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">Hier</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Prices Section -->
    <section id="market" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Marché local & <span
                        class="gradient-text">international</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comparaison des prix et analyses prédictives pour
                    optimiser vos décisions.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-map-marker-alt text-2xl text-emerald-700 mr-3"></i>
                        <h3 class="text-xl font-bold">Prix local</h3>
                    </div>
                    <p class="text-gray-600 mb-6">Données actualisées quotidiennement auprès des marchés régionaux du
                        Cameroun.</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Maïs (kg)</span>
                            <span class="font-bold">350 FCFA</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Cacao (kg)</span>
                            <span class="font-bold">1 250 FCFA</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Manioc (kg)</span>
                            <span class="font-bold">200 FCFA</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Banane plantain (régime)</span>
                            <span class="font-bold">3 000 FCFA</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-globe text-2xl text-yellow-500 mr-3"></i>
                        <h3 class="text-xl font-bold">Prix international</h3>
                    </div>
                    <p class="text-gray-600 mb-6">Cours mondiaux basés sur les indices FAO et les bourses des matières
                        premières.</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Maïs (tonne)</span>
                            <span class="font-bold">230 USD</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Cacao (tonne)</span>
                            <span class="font-bold">2 600 USD</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span>Huile de palme (tonne)</span>
                            <span class="font-bold">1 000 USD</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Café robusta (kg)</span>
                            <span class="font-bold">2.10 USD</span>
                        </div>
                    </div>
                </div>

                <div class="bg-emerald-700 p-6 rounded-xl shadow-md text-white">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-chart-line text-2xl mr-3"></i>
                        <h3 class="text-xl font-bold">Prévisions de prix</h3>
                    </div>
                    <p class="mb-6">Nos modèles d'IA analysent les tendances pour prédire l'évolution des marchés.
                    </p>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span>Maïs (30 jours)</span>
                                <span class="font-bold">+8% ▲</span>
                            </div>
                            <div class="w-full bg-white/20 rounded-full h-2">
                                <div class="bg-white h-2 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span>Cacao (30 jours)</span>
                                <span class="font-bold">+12% ▲</span>
                            </div>
                            <div class="w-full bg-white/20 rounded-full h-2">
                                <div class="bg-white h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span>Manioc (30 jours)</span>
                                <span class="font-bold">-3% ▼</span>
                            </div>
                            <div class="w-full bg-white/20 rounded-full h-2">
                                <div class="bg-white h-2 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span>Banane plantain (30 jours)</span>
                                <span class="font-bold">stable ↔</span>
                            </div>
                            <div class="w-full bg-white/20 rounded-full h-2">
                                <div class="bg-white h-2 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#"
                    class="px-6 py-3 yellow-button font-bold rounded-lg hover:opacity-90 transition inline-flex items-center">
                    <span>Accéder aux analyses complètes</span>
                    <i class="fas fa-chart-bar ml-2"></i>
                </a>
            </div>
        </div>
    </section>



    <!-- IMPACT -->
    <section id="impact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Notre <span
                        class="text-emerald-700">Impact</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">FassiAgro transforme concrètement l’agriculture camerounaise
                    grâce à l’intelligence artificielle, à la transparence des données et à la digitalisation de la
                    chaîne de valeur.</p>
                <div class="w-24 h-1 bg-emerald-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Image d’impact -->
                <div>
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1587&q=80"
                        alt="Groupe d'agriculteurs africains heureux récoltant des légumes frais grâce à une optimisation digitale"
                        class="rounded-lg shadow-lg w-full max-h-[400px] object-cover" />
                </div>



                <!-- Contenu impact -->
                <div>
                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-seedling text-green-600 text-sm"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Amélioration des revenus agricoles</h3>
                        </div>
                        <p class="text-gray-600">Grâce à une meilleure visibilité des offres, à l’accès aux prix
                            prédits et à la réduction des intermédiaires, les producteurs augmentent significativement
                            leurs revenus.</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-bell text-orange-600 text-sm"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Décisions mieux informées</h3>
                        </div>
                        <p class="text-gray-600">Les alertes intelligentes et les prévisions de prix locales et
                            internationales permettent aux producteurs et acheteurs de planifier avec plus de précision.
                        </p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-comments text-blue-600 text-sm"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Dialogue direct et rapide</h3>
                        </div>
                        <p class="text-gray-600">La messagerie interne et le chatbot FassiBot créent un environnement
                            d’échange transparent, rapide et accessible même en milieu rural.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#16A34A] to-[#F97316] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Rejoignez la révolution digitale de l'agriculture en
                Afrique</h2>
            <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto">Que vous soyez producteur, acheteur ou partenaire
                institutionnel, FassiAgro vous offre les outils pour transformer vos activités agricoles.</p>

            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#"
                    class="px-8 py-4 bg-white text-[#16A34A] font-bold rounded-lg hover:bg-gray-100 transition flex items-center justify-center">
                    <span>Créer un compte gratuitement</span>
                    <i class="fas fa-user-plus ml-2"></i>
                </a>
                <a href="#"
                    class="px-8 py-4 bg-transparent text-white font-bold border-2 border-white rounded-lg hover:bg-white hover:text-[#16A34A] transition flex items-center justify-center">
                    <span>Contactez notre équipe</span>
                    <i class="fas fa-headset ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Contactez-<span
                        class="text-emerald-700">nous</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Nous sommes à votre écoute pour toute question ou
                    opportunité de collaboration.</p>
                <div class="w-24 h-1 bg-emerald-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <form class="bg-white rounded-lg shadow-lg p-8">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Votre nom</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Votre email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
                            <select id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option>Demande d'information</option>
                                <option>Partenaire potentiel</option>
                                <option>Support technique</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-emerald-700 hover:bg-emerald-800 text-white px-6 py-3 rounded-lg font-semibold transition shadow-md">Envoyer
                            le message</button>
                    </form>
                </div>

                <div>
                    <div class="bg-white rounded-lg shadow-lg p-8 h-full">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Coordonnées</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-emerald-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Adresse</h4>
                                    <p class="text-gray-600">Avenue NFA, Quartier Bastos, Yaoundé, Cameroun</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Email</h4>
                                    <p class="text-gray-600">contact@fassiagro.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-green-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-phone-alt text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Téléphone</h4>
                                    <p class="text-gray-600">+237 6XX XXX XXX</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-100 p-3 rounded-full mr-4">
                                    <i class="fab fa-whatsapp text-yellow-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                                    <p class="text-gray-600">+237 6XX XXX XXX</p>
                                    <a href="#" class="text-emerald-600 text-sm inline-block mt-1">Cliquez pour
                                        discuter</a>
                                </div>
                            </div>

                            <div class="pt-6 mt-6 border-t border-gray-200">
                                <h4 class="font-semibold text-gray-800 mb-4">Suivez-nous</h4>
                                <div class="flex space-x-4">
                                    <a href="#"
                                        class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-400 hover:bg-blue-500 text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-pink-600 hover:bg-pink-700 text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-700 hover:bg-blue-800 text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-green-500 hover:bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-emerald-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-leaf text-2xl text-green-300"></i>
                        <span class="text-xl font-bold">Fassi<span class="text-yellow-300">Agro</span></span>
                    </div>
                    <p class="text-gray-300 mb-4">La plateforme qui connecte les producteurs agricoles aux
                        agro-industries en Afrique.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition">Accueil</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition">À propos</a></li>
                        <li><a href="#features" class="text-gray-300 hover:text-white transition">Fonctionnalités</a>
                        </li>
                        <li><a href="#impact" class="text-gray-300 hover:text-white transition">Impact</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Ressources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Presse</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Carrières</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-300 mb-4">Abonnez-vous pour suivre nos actualités.</p>
                    <form class="flex">
                        <input type="email" placeholder="Votre email"
                            class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-r-lg transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-emerald-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2023 FassiAgro. Tous droits réservés. | <a href="#"
                        class="hover:text-white transition">Politique de confidentialité</a> | <a href="#"
                        class="hover:text-white transition">Conditions d'utilisation</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });











        // Toggle Chat Window
        const chatButton = document.getElementById('chat-button');
        const chatContainer = document.getElementById('chat-container');
        const closeChat = document.getElementById('close-chat');

        chatButton.addEventListener('click', () => {
            chatContainer.classList.toggle('active');
        });

        closeChat.addEventListener('click', () => {
            chatContainer.classList.remove('active');
        });

        // Simple Chat Interaction
        const chatMessages = document.getElementById('chat-messages');
        const chatInput = chatContainer.querySelector('input');
        const sendButton = chatContainer.querySelector('button');

        sendButton.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        function sendMessage() {
            const message = chatInput.value.trim();
            if (message) {
                // Add user message
                chatMessages.innerHTML += `
                    <div class="flex justify-end mb-4">
                        <div class="bg-gradient-to-r from-[#16A34A] to-[#F97316] p-3 rounded-lg max-w-xs">
                            <p class="text-sm text-white">${message}</p>
                        </div>
                    </div>
                `;

                // Simulate bot response
                setTimeout(() => {
                    chatMessages.innerHTML += `
                        <div class="flex mb-4">
                            <div class="w-8 h-8 bg-[#16A34A] rounded-full flex items-center justify-center text-white mr-2">
                                <i class="fas fa-robot text-xs"></i>
                            </div>
                            <div class="bg-gray-100 p-3 rounded-lg max-w-xs">
                                <p class="text-sm text-gray-800">Je vais analyser votre demande concernant "${message}" et vous répondre au mieux.</p>
                            </div>
                        </div>
                    `;
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000);

                chatInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
