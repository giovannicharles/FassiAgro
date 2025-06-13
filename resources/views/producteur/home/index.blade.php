@extends('layouts.app')
@section('title','')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f7fafc 0%, #f0fff4 100%);
        }
        .farm-pattern {
            background-image: radial-gradient(circle at 10% 20%, #c6f6d5 0%, rgba(246, 252, 252, 0.8) 20%);
            background-size: 20px 20px;
        }
        .section-divider {
            height: 80px;
            background: linear-gradient(0deg, #ffffff 0%, rgba(247, 250, 252, 0) 100%);
        }
    </style>
@endsection()
@section('content')
<!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-2xl">FA</div>
                    <span class="ml-3 text-xl font-bold text-green-700">FassiAgro</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#problem" class="text-gray-600 hover:text-green-600 font-medium">Problem</a>
                    <a href="#features" class="text-gray-600 hover:text-green-600 font-medium">Features</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-green-600 font-medium">How It Works</a>
                    <a href="#market" class="text-gray-600 hover:text-green-600 font-medium">Market</a>
                    <a href="#team" class="text-gray-600 hover:text-green-600 font-medium">Team</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-btn" class="text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <a href="#problem" class="block py-2 text-gray-600 hover:text-green-600 font-medium">Problem</a>
                <a href="#features" class="block py-2 text-gray-600 hover:text-green-600 font-medium">Features</a>
                <a href="#how-it-works" class="block py-2 text-gray-600 hover:text-green-600 font-medium">How It Works</a>
                <a href="#market" class="block py-2 text-gray-600 hover:text-green-600 font-medium">Market</a>
                <a href="#team" class="block py-2 text-gray-600 hover:text-green-600 font-medium">Team</a>
                <div class="mt-3 flex space-x-4">
                    <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Request Demo</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg relative overflow-hidden">
        <div class="container mx-auto px-6 py-20 md:py-32">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-gray-800">Powering Cameroon's Agriculture with <span class="text-green-600">AI</span></h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-lg">FassiAgro connects producers and agro-industries through a smart digital ecosystem.</p>
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 text-center font-medium transition duration-300">Request a Demo</a>
                        <a href="#" class="px-6 py-3 border border-green-600 text-green-600 rounded-md hover:bg-green-50 text-center font-medium transition duration-300">Download Investor Brief</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute -right-10 -top-10 w-64 h-64 bg-orange-200 rounded-full mix-blend-multiply opacity-70 animate-blob"></div>
                        <div class="absolute -bottom-12 left-10 w-64 h-64 bg-green-200 rounded-full mix-blend-multiply opacity-70 animate-blob animation-delay-2000"></div>
                        <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Farming in Cameroon" class="relative z-10 rounded-xl shadow-2xl w-full max-w-lg mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem/Opportunity Section -->
    <section id="problem" class="py-20 bg-white farm-pattern">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">The Agricultural Challenge in Cameroon</h2>
                <div class="h-1 w-24 bg-green-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">The Problems</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exclamation text-red-500"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Fragmented Supply Chains</h4>
                                <p class="mt-1 text-gray-600">No efficient connection between small-scale farmers and industrial buyers leads to wasted crops and lost income.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-chart-line text-red-500"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Price Volatility</h4>
                                <p class="mt-1 text-gray-600">Farmers sell at low prices due to poor market information while processors face high costs from inconsistent supply.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-road text-red-500"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Market Access Barriers</h4>
                                <p class="mt-1 text-gray-600">Remote farmers struggle to connect with buyers while cooperatives lack visibility on national production capacity.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Solution</h3>
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-brain text-green-600"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">AI-Powered Agricultural Platform</h4>
                        </div>
                        <p class="text-gray-600 mb-4">FassiAgro bridges the gap between producers and buyers using predictive analytics and intelligent matching:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-700">Dynamic price forecasting helps farmers optimize harvest timing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-700">Automated matching reduces transaction costs by up to 40%</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-700">Logistics coordination minimizes post-harvest losses</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Key Features -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Key Features</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Empowering all players in the agricultural value chain</p>
                <div class="h-1 w-24 bg-green-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-people-arrows text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Intelligent Matching</h3>
                    <p class="text-gray-600">Our AI analyzes over 20 parameters to connect the right farmers with the right buyers based on quality requirements, location, and volume needs.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Price Predictions</h3>
                    <p class="text-gray-600">Machine learning models forecast commodity prices up to 6 months in advance, helping farmers decide the optimal time to sell.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-seedling text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Crop Recommendations</h3>
                    <p class="text-gray-600">Farmers receive personalized advice on what to plant based on soil data, weather forecasts, and market demand projections.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-map-marked-alt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Producer Mapping</h3>
                    <p class="text-gray-600">Interactive maps show real-time concentration of different crops across regions, helping buyers source efficiently.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tasks text-red-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Demand Dashboard</h3>
                    <p class="text-gray-600">Buyers can post their procurement needs and see aggregate supply availability from verified farmers in our network.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition duration-300">
                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">USSD Access</h3>
                    <p class="text-gray-600">Farmers without smartphones can access key features through simple phone menus in local languages.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">How FassiAgro Works</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Connecting farmers and buyers in 4 simple steps</p>
                <div class="h-1 w-24 bg-green-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="relative mx-auto mb-6">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                            <span class="text-3xl font-bold text-green-600">1</span>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-16 h-16 bg-orange-100 rounded-full opacity-50 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Farmers Post Offers</h3>
                    <p class="text-gray-600">Producers list their available crops with details on quality, quantity and preferred price via app, web, or USSD.</p>
                </div>

                <!-- Step Arrow -->
                <div class="hidden md:flex items-center justify-center">
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <i class="fas fa-arrow-right text-gray-400 mx-2"></i>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="relative mx-auto mb-6">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                            <span class="text-3xl font-bold text-green-600">2</span>
                        </div>
                        <div class="absolute -top-4 left-8 w-12 h-12 bg-blue-100 rounded-full opacity-50 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Buyers Post Needs</h3>
                    <p class="text-gray-600">Agro-industries and cooperatives specify their procurement requirements including quality standards and delivery timelines.</p>
                </div>

                <!-- Step Arrow -->
                <div class="hidden md:flex items-center justify-center">
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <i class="fas fa-arrow-right text-gray-400 mx-2"></i>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="relative mx-auto mb-6">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                            <span class="text-3xl font-bold text-green-600">3</span>
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-14 h-14 bg-purple-100 rounded-full opacity-50 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">AI Makes Matches</h3>
                    <p class="text-gray-600">Our algorithm evaluates location, price expectations, quality ratings, and logistics to recommend optimal connections.</p>
                </div>

                <!-- Step Arrow -->
                <div class="hidden md:flex items-center justify-center">
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <i class="fas fa-arrow-right text-gray-400 mx-2"></i>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="relative mx-auto mb-6">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                            <span class="text-3xl font-bold text-green-600">4</span>
                        </div>
                        <div class="absolute -right-4 top-4 w-14 h-14 bg-yellow-100 rounded-full opacity-50 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Transactions & Logistics</h3>
                    <p class="text-gray-600">The platform facilitates price negotiation, quality verification, payment processing, and logistics coordination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Preview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Farmer Dashboard Preview</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">See the impact of technology in farmers' hands</p>
                <div class="h-1 w-24 bg-green-500 mx-auto mt-4"></div>
            </div>

            <div class="bg-gray-100 rounded-2xl p-6 shadow-xl max-w-5xl mx-auto overflow-hidden">
                <div class="flex space-x-2 mb-4">
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    <div class="flex-1 border-b border-gray-300 ml-2"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <!-- Dashboard Tab -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="bg-green-600 px-4 py-2 text-white font-medium flex items-center">
                            <i class="fas fa-box-open mr-2"></i>
                            <span>My Offers</span>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="border-b border-gray-100 pb-2">
                                    <div class="text-sm font-medium text-gray-800">Bananas (Ripe)</div>
                                    <div class="text-xs text-gray-600">200kg | FCFA 300/kg</div>
                                    <div class="text-xs text-green-600 mt-1">3 buyer requests</div>
                                </div>
                                <div class="border-b border-gray-100 pb-2">
                                    <div class="text-sm font-medium text-gray-800">Cocoa Beans (Grade A)</div>
                                    <div class="text-xs text-gray-600">500kg | FCFA 1,200/kg</div>
                                    <div class="text-xs text-green-600 mt-1">1 buyer request</div>
                                </div>
                            </div>
                            <button class="mt-3 w-full text-center py-1 bg-green-50 text-green-600 text-xs rounded">+ New Offer</button>
                        </div>
                    </div>

                    <!-- Dashboard Tab -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="bg-blue-600 px-4 py-2 text-white font-medium flex items-center">
                            <i class="fas fa-chart-line mr-2"></i>
                            <span>Price Predictions</span>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm font-medium text-gray-800">Bananas</span>
                                <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded">+12% in 3 months</span>
                            </div>
                            <div class="h-32 bg-gray-50 rounded p-2 mb-2">
                                <div class="h-full w-full relative">
                                    <div class="absolute bottom-0 left-0 right-0 h-3/4 bg-gradient-to-t from-blue-100 to-blue-50 rounded"></div>
                                    <div class="flex h-full w-full absolute bottom-0 left-0 items-end">
                                        <div class="h-1/2 w-1/4 bg-blue-500 rounded-t mx-0.5"></div>
                                        <div class="h-3/5 w-1/4 bg-blue-400 rounded-t mx-0.5"></div>
                                        <div class="h-3/4 w-1/4 bg-blue-500 rounded-t mx-0.5"></div>
                                        <div class="h-full w-1/4 bg-blue-600 rounded-t mx-0.5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs text-center text-gray-600 mt-1">Monthly price forecast (3 months)</div>
                        </div>
                    </div>

                    <!-- Dashboard Tab -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="bg-purple-600 px-4 py-2 text-white font-medium flex items-center">
                            <i class="fas fa-users mr-2"></i>
                            <span>Interested Buyers</span>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="border-b border-gray-100 pb-2">
                                    <div class="text-sm font-medium text-gray-800">Cameroon Beverage Co.</div>
                                    <div class="text-xs text-gray-600">For: Bananas | 150kg at FCFA 280/kg</div>
                                    <div class="text-xs text-gray-600 mt-1">
                                        <i class="fas fa-map-marker-alt text-purple-500 mr-1"></i>
                                        Douala (20km from you)
                                    </div>
                                    <div class="flex space-x-2 mt-1">
                                        <button class="text-xs px-2 py-0.5 bg-green-100 text-green-800 rounded">Accept</button>
                                        <button class="text-xs px-2 py-0.5 bg-gray-100 text-gray-800 rounded">Counter</button>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-3 w-full text-center py-1 bg-purple-50 text-purple-600 text-xs rounded">View All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Potential -->
    <section id="market" class="py-20 bg-green-700 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Market Potential & Impact</h2>
                <p class="text-xl text-green-100 max-w-2xl mx-auto">Transforming agriculture in Cameroon and beyond</p>
                <div class="h-1 w-24 bg-white bg-opacity-50 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-green-800 bg-opacity-30 rounded-xl p-6 text-center">
                    <div class="text-4xl font-bold mb-2">$7.2B</div>
                    <div class="text-lg font-medium">Cameroon's Agricultural GDP</div>
                    <p class="text-sm text-green-100 mt-2">40% of national GDP comes from agriculture, with over 2 million smallholder farmers.</p>
                </div>

                <div class="bg-green-800 bg-opacity-30 rounded-xl p-6 text-center">
                    <div class="text-4xl font-bold mb-2">30-40%</div>
                    <div class="text-lg font-medium">Post-Harvest Loss Reduction</div>
                    <p class="text-sm text-green-100 mt-2">Our partners achieve through better market coordination and logistics.</p>
                </div>

                <div class="bg-green-800 bg-opacity-30 rounded-xl p-6 text-center">
                    <div class="text-4xl font-bold mb-2">3.5M</div>
                    <div class="text-lg font-medium">Potential Farmers in Cameroon</div>
                    <p class="text-sm text-green-100 mt-2">Who could benefit from access to digital market platforms by 2025.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Economic Impact</h3>
                    <p class="text-green-100 mb-4">FassiAgro creates value across the agricultural ecosystem:</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-300"></i>
                            <span>20-30% income increase for small farmers through better prices</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-300"></i>
                            <span>Reduced procurement costs for agro-industries with more efficient sourcing</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-300"></i>
                            <span>Job creation in rural areas through agricultural value addition</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold mb-4">Strategic Importance</h3>
                    <p class="text-green-100 mb-4">Our solution aligns with key national and continental priorities:</p>
                    <div class="bg-white bg-opacity-10 rounded-xl p-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-800 rounded-full flex items-center justify-center text-white mr-4">
                                <i class="fas fa-globe-africa"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">African Continental Free Trade Area</h4>
                                <p class="text-sm text-green-100">Enabling cross-border agricultural trade with standardized quality metrics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <section id="team" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Meet the Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Passionate about technology and agriculture</p>
                <div class="h-1 w-24 bg-green-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Founder -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gradient-to-r from-green-400 to-blue-500 relative">
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Founder" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="pt-16 pb-6 px-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Jean Fassi</h3>
                        <p class="text-sm text-green-600 font-medium">Founder & CEO</p>
                        <p class="text-sm text-gray-600 mt-2">Computer Science graduate passionate about applying AI to solve agricultural challenges in Africa.</p>
                        <div class="flex justify-center space-x-3 mt-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gradient-to-r from-orange-400 to-pink-500 relative">
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="AI Specialist" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="pt-16 pb-6 px-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Amina Bello</h3>
                        <p class="text-sm text-green-600 font-medium">AI Specialist</p>
                        <p class="text-sm text-gray-600 mt-2">Machine learning expert with PhD in predictive analytics for agricultural markets.</p>
                        <div class="flex justify-center space-x-3 mt-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gradient-to-r from-purple-400 to-indigo-500 relative">
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Agriculture Expert" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="pt-16 pb-6 px-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Samuel Njoh</h3>
                        <p class="text-sm text-green-600 font-medium">Agricultural Expert</p>
                        <p class="text-sm text-gray-600 mt-2">30 years experience in African agricultural value chains and cooperative development.</p>
                        <div class="flex justify-center space-x-3 mt-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-gradient-to-r from-yellow-400 to-red-500 relative">
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Business Mentor" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="pt-16 pb-6 px-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Mariane Kwedi</h3>
                        <p class="text-sm text-green-600 font-medium">Business Mentor</p>
                        <p class="text-sm text-gray-600 mt-2">Serial entrepreneur and investor with multiple successful exits in African tech.</p>
                        <div class="flex justify-center space-x-3 mt-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Us in Transforming African Agriculture</h2>
                <p class="text-xl text-green-100 mb-8">We're seeking visionary investors and strategic partners to scale our impact across Cameroon and beyond.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="px-8 py-3 bg-white text-green-700 rounded-md hover:bg-gray-100 text-center font-medium transition duration-300">Invest in FassiAgro</a>
                    <a href="#" class="px-8 py-3 border-2 border-white text-white rounded-md hover:bg-white hover:bg-opacity-10 text-center font-medium transition duration-300">Contact Us</a>
                    <a href="#" class="px-8 py-3 border-2 border-white text-white rounded-md hover:bg-white hover:bg-opacity-10 text-center font-medium transition duration-300">Book a Meeting</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xl">FA</div>
                        <span class="ml-3 text-xl font-bold">FassiAgro</span>
                    </div>
                    <p class="text-gray-400">Building intelligent connections in African agriculture through artificial intelligence.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#problem" class="text-gray-400 hover:text-green-400">The Problem</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-green-400">Features</a></li>
                        <li><a href="#how-it-works" class="text-gray-400 hover:text-green-400">How It Works</a></li>
                        <li><a href="#team" class="text-gray-400 hover:text-green-400">Our Team</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-green-400">Investor Brief</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-green-400">Business Model</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-green-400">Case Studies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-green-400">FAQs</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-400"></i>
                            <span>Bastos, Yaoundé<br>Cameroon</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-green-400"></i>
                            <span>contact@fassiagro.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-green-400"></i>
                            <span>+237 6XX XXX XXX</span>
                        </li>
                        <li class="flex space-x-4 mt-4">
                            <a href="#" class="text-gray-400 hover:text-green-400"><i class="fab fa-twitter text-xl"></i></a>
                            <a href="#" class="text-gray-400 hover:text-green-400"><i class="fab fa-linkedin-in text-xl"></i></a>
                            <a href="#" class="text-gray-400 hover:text-green-400"><i class="fab fa-facebook-f text-xl"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2023 FassiAgro. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-green-400 text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-green-400 text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-green-400 text-sm">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
@endsection()
@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('bg-white text-gray-800');
        });
        // Mobile menu toggle
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Animate blobs
        const blobs = document.querySelectorAll('.animate-blob');
        blobs.forEach((blob, index) => {
            // Add delay to each blob
            blob.style.animationDelay = `${index * 1000}ms`;
        });
    </script>
@endsection()
