@extends('layouts.app')
@section('title', '')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2F855A',
                        secondary: '#DD6B20',
                        accent: '#F6AD55',
                        dark: '#1A202C',
                        light: '#F7FAFC'
                    }
                }
            }
        }
    </script>
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: cover;
            background-position: center;
        }

        .dashboard-mockup {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: 8px solid white;
            border-radius: 12px;
        }

        .how-it-works-step {
            position: relative;
        }

        .how-it-works-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            right: -10%;
            width: 20%;
            height: 2px;
            background: #DD6B20;
            z-index: -1;
        }

        @media (max-width: 768px) {
            .how-it-works-step:not(:last-child):after {
                top: unset;
                left: 50%;
                bottom: -20%;
                width: 2px;
                height: 20%;
                transform: translateX(-50%);
            }
        }
    </style>
@endsection()
@section('content')
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-primary">FassiAgro</span>
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="#features" class="text-gray-700 hover:text-primary font-medium">Features</a>
                <a href="#solutions" class="text-gray-700 hover:text-primary font-medium">Solutions</a>
                <a href="#how-it-works" class="text-gray-700 hover:text-primary font-medium">How It Works</a>
                <a href="#team" class="text-gray-700 hover:text-primary font-medium">Team</a>
                <a href="#contact" class="text-gray-700 hover:text-primary font-medium">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#"
                    class="px-4 py-2 rounded-md font-medium text-primary border border-primary hover:bg-primary hover:text-white transition">Login</a>
                <button class="md:hidden" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden bg-white w-full absolute left-0 shadow-lg py-2" id="mobile-menu">
            <a href="#features" class="block px-4 py-2 hover:bg-gray-100">Features</a>
            <a href="#solutions" class="block px-4 py-2 hover:bg-gray-100">Solutions</a>
            <a href="#how-it-works" class="block px-4 py-2 hover:bg-gray-100">How It Works</a>
            <a href="#team" class="block px-4 py-2 hover:bg-gray-100">Team</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-gray-100">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Secure your agricultural supply with
                    intelligent sourcing</h1>
                <p class="text-xl md:text-2xl mb-8">FassiAgro helps you find reliable producers, predict market prices, and
                    optimize your procurement strategy.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="bg-primary hover:bg-green-700 text-white font-bold py-3 px-6 rounded-md text-center transition">Start
                        Now</a>
                    <a href="#"
                        class="bg-secondary hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-md text-center transition">Request
                        Investor Pack</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="dashboard-mockup bg-white w-full max-w-md h-64 md:h-80 rounded-lg overflow-hidden relative">
                    <div class="absolute top-0 left-0 right-0 bg-gray-200 h-8 flex items-center px-3">
                        <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="mt-8 p-4">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mr-3">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-sm">New Demand: Maize</div>
                                <div class="text-xs text-gray-500">3 matching producers found</div>
                            </div>
                        </div>
                        <div class="h-32 bg-gray-100 rounded-md p-3 flex flex-col justify-between">
                            <div class="flex items-center">
                                <div
                                    class="w-8 h-8 rounded-full bg-green-200 text-primary flex items-center justify-center mr-2">
                                    <i class="fas fa-user fa-xs"></i>
                                </div>
                                <div>
                                    <div class="text-xs font-medium">Coopérative Agricole de l'Ouest</div>
                                    <div class="text-xs text-gray-500">50km away • 2.5 tons available</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="px-2 py-1 bg-primary text-white text-xs rounded-full">80% match</div>
                                <div class="px-2 py-1 bg-accent text-gray-800 text-xs rounded-full">Certified organic</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Bar -->
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <p class="text-center text-gray-500 mb-6">Trusted by leading organizations in Cameroon</p>
            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="w-24 h-16 bg-white rounded flex items-center justify-center shadow">
                    <span class="font-bold text-gray-700">SABC</span>
                </div>
                <div class="w-24 h-16 bg-white rounded flex items-center justify-center shadow">
                    <span class="font-bold text-gray-700">CASC</span>
                </div>
                <div class="w-24 h-16 bg-white rounded flex items-center justify-center shadow">
                    <span class="font-bold text-gray-700">FarmGate</span>
                </div>
                <div class="w-24 h-16 bg-white rounded flex items-center justify-center shadow">
                    <span class="font-bold text-gray-700">AgroTech</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why FassiAgro -->
    <section id="solutions" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Why FassiAgro for Buyers?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Challenges in Cameroon's agricultural procurement and how
                    we solve them</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-6 text-secondary">Current Challenges</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-red-100 p-2 rounded-full mr-4">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Inconsistent Quality Supply</h4>
                                <p class="text-gray-600">Difficulty finding and vetting reliable producers who meet your
                                    quality standards consistently.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-red-100 p-2 rounded-full mr-4">
                                <i class="fas fa-question-circle text-red-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Lack of Traceability</h4>
                                <p class="text-gray-600">No visibility into production methods, farm conditions, or supply
                                    chain intermediaries.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-red-100 p-2 rounded-full mr-4">
                                <i class="fas fa-chart-line text-red-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Price Uncertainty</h4>
                                <p class="text-gray-600">Market volatility makes budgeting difficult and can squeeze your
                                    profit margins.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-red-100 p-2 rounded-full mr-4">
                                <i class="fas fa-tasks text-red-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Manual Processes</h4>
                                <p class="text-gray-600">Relying on spreadsheets, phone calls, and intermediaries creates
                                    inefficiencies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 text-primary">FassiAgro Solutions</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-brain text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">AI-Powered Matching</h4>
                                <p class="text-gray-600">Our algorithm connects you with vetted producers matching your
                                    quantity, quality, and location requirements.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-map-marked-alt text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Real-Time Supply Maps</h4>
                                <p class="text-gray-600">See up-to-date availability by crop type and region to plan your
                                    sourcing strategy.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-chart-pie text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Price Forecasting</h4>
                                <p class="text-gray-600">Our AI predicts price trends to help you buy at optimal times and
                                    manage budgets.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <i class="fas fa-exchange-alt text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Digital Procurement</h4>
                                <p class="text-gray-600">Manage contracts, payments, and logistics in one platform with
                                    full transparency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section id="features" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Key Features of the Buyer Dashboard</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Everything you need to manage your agricultural supply
                    chain in one place</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-full bg-orange-100 text-secondary flex items-center justify-center mb-4">
                        <i class="fas fa-inbox text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mes demandes</h3>
                    <p class="text-gray-600">Manage all your sourcing requests with real-time status updates from planting
                        to delivery.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-full bg-green-100 text-primary flex items-center justify-center mb-4">
                        <i class="fas fa-user-tie text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Producteurs correspondants</h3>
                    <p class="text-gray-600">AI-recommended farmers based on your specific requirements: crop type,
                        quantity, region, and quality standards.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Prévision des prix</h3>
                    <p class="text-gray-600">Predictive analytics to anticipate market movements and optimize your
                        purchasing timing.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div
                        class="w-12 h-12 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mb-4">
                        <i class="fas fa-history text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Historique des achats</h3>
                    <p class="text-gray-600">Complete records of past transactions, contracts, and performance metrics for
                        each supplier.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div
                        class="w-12 h-12 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center mb-4">
                        <i class="fas fa-map-marked-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Carte interactive</h3>
                    <p class="text-gray-600">Visual mapping of sourcing zones with production capacity, transport routes,
                        and seasonality data.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center mb-4">
                        <i class="fas fa-file-contract text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Contract Management</h3>
                    <p class="text-gray-600">Digitize agreements with built-in templates, e-signatures, and compliance
                        tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">How FassiAgro Works for Buyers</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Transform your agricultural procurement in 4 simple
                    steps</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 mb-20">
                <div class="how-it-works-step flex flex-col items-center p-6 text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-primary text-white flex items-center justify-center text-2xl font-bold mb-4 shadow-lg">
                        1</div>
                    <h3 class="text-xl font-semibold mb-2">Post Your Demand</h3>
                    <p class="text-gray-600">Specify crop type, quantity, quality standards, and preferred locations.</p>
                </div>

                <div class="how-it-works-step flex flex-col items-center p-6 text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-secondary text-white flex items-center justify-center text-2xl font-bold mb-4 shadow-lg">
                        2</div>
                    <h3 class="text-xl font-semibold mb-2">Receive Matches</h3>
                    <p class="text-gray-600">Our AI analyzes thousands of profiles to find your ideal suppliers.</p>
                </div>

                <div class="how-it-works-step flex flex-col items-center p-6 text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-accent text-white flex items-center justify-center text-2xl font-bold mb-4 shadow-lg">
                        3</div>
                    <h3 class="text-xl font-semibold mb-2">Connect & Contract</h3>
                    <p class="text-gray-600">Message directly through the platform and finalize terms with digital
                        contracts.</p>
                </div>

                <div class="how-it-works-step flex flex-col items-center p-6 text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-600 text-white flex items-center justify-center text-2xl font-bold mb-4 shadow-lg">
                        4</div>
                    <h3 class="text-xl font-semibold mb-2">Track & Manage</h3>
                    <p class="text-gray-600">Monitor fulfillment progress, payments, and build long-term supplier
                        relationships.</p>
                </div>
            </div>

            <div class="bg-primary rounded-xl p-8 md:p-12 text-white">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/3 mb-8 md:mb-0">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4">See the FassiAgro Buyer Platform in Action</h3>
                        <p class="text-lg mb-6">Get a personalized demo of how our platform can streamline your
                            agricultural procurement.</p>
                        <a href="#"
                            class="inline-block bg-white text-primary font-bold py-3 px-8 rounded-md hover:bg-gray-100 transition">Request
                            a Demo</a>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                        <div class="bg-white bg-opacity-20 p-6 rounded-full">
                            <i class="fas fa-play text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-primary mb-2">60%</div>
                    <h3 class="text-xl font-semibold mb-2">of Cameroon's workforce</h3>
                    <p class="text-gray-600">engaged in agriculture, yet supply chains remain fragmented.</p>
                </div>

                <div class="text-center">
                    <div class="text-5xl font-bold text-secondary mb-2">40%</div>
                    <h3 class="text-xl font-semibold mb-2">Reduction in Sourcing Time</h3>
                    <p class="text-gray-600">with FassiAgro's digital marketplace and matching technology.</p>
                </div>

                <div class="text-center">
                    <div class="text-5xl font-bold text-accent mb-2">5x</div>
                    <h3 class="text-xl font-semibold mb-2">More Supplier Visibility</h3>
                    <p class="text-gray-600">with detailed farmer profiles and production history.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Meet the Visionary Team</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Driving agricultural digital transformation in Cameroon
                </p>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <div class="text-center max-w-sm">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-200 mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563565375-f3fdfdb60581?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                            alt="Founder" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Jean Fotso</h3>
                    <p class="text-secondary font-medium mb-3">Founder & CEO</p>
                    <p class="text-gray-600 mb-4">Computer engineering student and AI enthusiast at the University of
                        Yaoundé, passionate about solving agricultural challenges through technology.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-500 hover:text-primary"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div class="bg-primary bg-opacity-10 p-6 rounded-lg max-w-sm">
                    <h3 class="text-xl font-bold mb-4 text-primary">Advisory Board</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold">Dr. Amina Ndi</h4>
                            <p class="text-sm text-gray-600">Former Director, Ministry of Agriculture</p>
                        </div>
                        <div>
                            <h4 class="font-semibold">Mark Tanyi</h4>
                            <p class="text-sm text-gray-600">Tech Entrepreneur, Silicon Mountain</p>
                        </div>
                        <div>
                            <h4 class="font-semibold">Patrice Mbarga</h4>
                            <p class="text-sm text-gray-600">Supply Chain Expert, SAK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">What Our Buyers Say</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Success stories from Cameroon's agricultural sector</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-gray-200 mr-4 overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Samuel Tabe</h4>
                            <p class="text-sm text-gray-500">Procurement Manager, Cameroon Flour Mills</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"FassiAgro has transformed how we source wheat in Cameroon. We've reduced
                        our supplier vetting time by 70% and improved traceability across our supply chain."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-gray-200 mr-4 overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Marie-Claire Ngon</h4>
                            <p class="text-sm text-gray-500">Director, Coopérative Agricole de l'Ouest</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The price forecasting tools help us plan our purchases strategically.
                        We've increased our profit margins by 15% while ensuring fair prices for our member farmers."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 md:py-24 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Digitize your agricultural supply chain with FassiAgro</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join leading agro-industries and cooperatives transforming how
                Cameroon sources agriculture.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="#"
                    class="bg-white text-primary font-bold py-3 px-8 rounded-md hover:bg-gray-100 transition">Try the Buyer
                    Dashboard</a>
                <a href="#"
                    class="bg-secondary text-white font-bold py-3 px-8 rounded-md hover:bg-orange-600 transition">Partner
                    with Us</a>
                <a href="#"
                    class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-md hover:bg-white hover:text-primary transition">Book
                    a Demo</a>
            </div>
            <div class="max-w-md mx-auto bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Contact Our Sales Team</h3>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+237690000000" class="flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i> +237 690 000 000
                    </a>
                    <a href="mailto:sales@fassiagro.com" class="flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i> sales@fassiagro.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-gray-300 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">FassiAgro</h3>
                    <p class="mb-4">Connecting agricultural supply chains in Cameroon through AI-powered technology.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">For Buyers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">How It Works</a></li>
                        <li><a href="#" class="hover:text-white">Pricing</a></li>
                        <li><a href="#" class="hover:text-white">Case Studies</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Team</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                            <span>Silicon Mountain, Buea, Cameroon</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span>+237 690 000 000</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>hello@fassiagro.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2023 FassiAgro. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <a href="#" class="hover:text-white">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
@endsection()
@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('font-sans antialiased text-gray-800');
        });
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
@endsection()
