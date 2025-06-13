@extends('layouts.app')
@section('title', '')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f97316 0%, #22c55e 100%);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .dashboard-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .map-background {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgcGF0dGVyblRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiB4PSIwIiB5PSIwIiBmaWxsPSJub25lIiBzdHJva2U9IiNmOWY5ZjkiIHN0cm9rZS13aWR0aD0iMSI+PC9yZWN0PjwvcGF0dGVybj48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSI+PC9yZWN0Pjwvc3ZnPg==');
        }
    </style>
@endsection()
@section('content')
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-green-600">Fassi<span class="text-orange-500">Agro</span></span>
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="#" class="text-gray-900 hover:text-green-600 px-3 py-2 text-sm font-medium">Features</a>
                    <a href="#" class="text-gray-900 hover:text-green-600 px-3 py-2 text-sm font-medium">For
                        Farmers</a>
                    <a href="#" class="text-gray-900 hover:text-green-600 px-3 py-2 text-sm font-medium">For
                        Industries</a>
                    <a href="#" class="text-gray-900 hover:text-green-600 px-3 py-2 text-sm font-medium">Impact</a>
                    <div class="inline-block relative">
                        <select
                            class="block appearance-none bg-gray-100 border border-gray-300 text-gray-700 py-1 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-green-500 text-sm">
                            <option>English</option>
                            <option>Français</option>
                        </select>
                    </div>
                    <a href="#"
                        class="px-4 py-2 border border-orange-500 text-orange-500 rounded-md hover:bg-orange-50 text-sm font-medium transition duration-150">Login</a>
                    <a href="#"
                        class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 text-sm font-medium transition duration-150">Sign
                        Up</a>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                    <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">Transforming Agriculture</span>
                                <span class="block text-green-600">in Cameroon with AI</span>
                            </h1>
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                FassiAgro connects producers and agro-industries through a smart, data-driven ecosystem.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 md:py-4 md:text-lg md:px-10 transition duration-150">
                                        Try the Platform
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 md:py-4 md:text-lg md:px-10 transition duration-150">
                                        Request Investor Brief
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80"
                alt="Cameroonian farmers">
        </div>
    </section>
    <!-- What is FassiAgro? -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="lg:text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">What is FassiAgro?</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    The digital bridge between producers and buyers
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    FassiAgro is an AI-powered platform that modernizes agricultural value chains by connecting smallholders
                    with agro-industries, providing market intelligence, and optimizing crop distribution across Cameroon.
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                                <i class="fas fa-seedling text-green-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">For Producers</h3>
                                <p class="mt-1 text-gray-500">
                                    Sell your crops directly to industries at fair prices, bypassing intermediaries.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <img src="https://images.unsplash.com/photo-1604866830604-e77828e49ab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Farmers" class="w-full h-auto rounded-lg">
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                                <i class="fas fa-industry text-orange-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">For Buyers</h3>
                                <p class="mt-1 text-gray-500">
                                    Source quality crops directly from verified producers at competitive prices.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <img src="https://images.unsplash.com/photo-1560520031-3a4dc4e9de0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Agro Industry" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Features -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Our Powerful Tools
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Everything you need to modernize your agricultural business
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-box-open text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Publish Crop Offers</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Easily list your available crops with quantity, quality specifications and location.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-search-dollar text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Receive Buyer Demands</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Get matched with genuine buyer requests that match your products and location.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">AI Price Forecasts</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Smart predictions for crop prices 3-6 months ahead to help you plan better.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-people-arrows text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Intelligent Matching</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Our algorithm matches you with the most suitable partners based on quality, location and
                            history.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-map-marked-alt text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Regional Supply Mapping</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Visualize crop availability across regions to optimize sourcing and distribution.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-white rounded-lg feature-card p-8 border border-gray-100 hover:border-green-100 transition-all duration-300 ease-in-out">
                        <div
                            class="flex-shrink-0 bg-green-100 h-12 w-12 rounded-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-file-contract text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Digital Contracts</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Secure transactions with legally binding digital contracts and payment tracking.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- For Whom Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Solutions For</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Farmers & Agro-industries
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Tailored solutions for all stakeholders in the agricultural value chain
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <!-- Farmers Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div
                                    class="flex-shrink-0 h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-tractor text-green-600 text-xl"></i>
                                </div>
                                <h3 class="ml-4 text-2xl font-bold text-gray-900" style="line-height: 1.2;">Smallholder
                                    Farmers & Cooperatives</h3>
                            </div>
                            <div class="mt-6">
                                <ul class="space-y-4">
                                    <li class="flex">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Sell your crops at fair prices without middlemen</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Access guaranteed markets before planting</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">AI-powered planting recommendations</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Track payment and logistics digitally</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-8">
                                <a href="#"
                                    class="inline-block px-6 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-150">
                                    Learn about FassiAgro for Farmers
                                </a>
                            </div>
                        </div>
                        <div class="bg-green-50 px-8 py-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1598182198871-d3f4ab4fd181?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                        alt="Farmer testimonial">
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-700">"FassiAgro helped us sell our maize at 30% higher
                                        prices by connecting us directly with food processors."</p>
                                    <p class="mt-1 text-sm font-medium text-gray-900">John M., Farmer in West Region</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industries Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div
                                    class="flex-shrink-0 h-12 w-12 bg-orange-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-industry text-orange-600 text-xl"></i>
                                </div>
                                <h3 class="ml-4 text-2xl font-bold text-gray-900" style="line-height: 1.2;">
                                    Agro-industries & Large Buyers</h3>
                            </div>
                            <div class="mt-6">
                                <ul class="space-y-4">
                                    <li class="flex">
                                        <i class="fas fa-check text-orange-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Source quality crops directly from producers</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-orange-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Price forecasts for better procurement planning</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-orange-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Guarantee supply with forward contracts</span>
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-check text-orange-500 mt-1 mr-3"></i>
                                        <span class="text-gray-600">Quality verification and digital contracts</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-8">
                                <a href="#"
                                    class="inline-block px-6 py-3 bg-orange-600 text-white font-medium rounded-lg hover:bg-orange-700 transition duration-150">
                                    Learn about FassiAgro for Industries
                                </a>
                            </div>
                        </div>
                        <div class="bg-orange-50 px-8 py-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                        alt="Industry testimonial">
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-700">"Our sourcing costs reduced by 15% while improving
                                        quality consistency through FassiAgro."</p>
                                    <p class="mt-1 text-sm font-medium text-gray-900">Marie K., Procurement Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Previews -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Interface</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Simple Yet Powerful Dashboards
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Designed for ease of use with all essential features at your fingertips
                </p>
            </div>

            <div class="mt-12">
                <div class="flex justify-center">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button"
                            class="px-6 py-3 text-sm font-medium text-green-700 bg-green-100 rounded-l-lg border border-green-300 hover:bg-green-200 focus:z-10 focus:ring-2 focus:ring-green-500 focus:bg-green-100">
                            Producer Dashboard
                        </button>
                        <button type="button"
                            class="px-6 py-3 text-sm font-medium text-orange-700 bg-orange-100 rounded-r-lg border border-orange-300 hover:bg-orange-200 focus:z-10 focus:ring-2 focus:ring-orange-500 focus:bg-orange-100">
                            Buyer Dashboard
                        </button>
                    </div>
                </div>

                <div class="mt-10">
                    <div class="max-w-5xl mx-auto rounded-xl dashboard-shadow overflow-hidden bg-gray-50 p-1">
                        <img class="w-full h-auto"
                            src="https://via.placeholder.com/1200x700/eff5f5/22c55e?text=FassiAgro+Dashboard+Preview"
                            alt="Dashboard Preview">
                    </div>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div
                        class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-medium text-gray-900">Real-time Insights</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Monitor your offers, demands, transactions and market trends from one place.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div
                        class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                        <i class="fas fa-comments-dollar"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-medium text-gray-900">Direct Messaging</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Built-in chat to negotiate directly with verified partners.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div
                        class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-medium text-gray-900">Mobile Friendly</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Works perfectly on smartphones for users with limited connectivity.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Social & Economic Impact -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-base text-green-400 font-semibold tracking-wide uppercase">Impact</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Revolutionizing Cameroonian Agriculture
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                    Creating measurable impact across the agricultural ecosystem
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-4">
                    <div class="text-center">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600 mx-auto">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <p class="mt-5 text-4xl font-semibold text-green-400">30%+</p>
                        <p class="mt-2 text-sm text-gray-300">
                            Reduction in post-harvest losses through direct market access
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600 mx-auto">
                            <i class="fas fa-coins"></i>
                        </div>
                        <p class="mt-5 text-4xl font-semibold text-green-400">25%+</p>
                        <p class="mt-2 text-sm text-gray-300">
                            Higher incomes for smallholder farmers using our platform
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600 mx-auto">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <p class="mt-5 text-4xl font-semibold text-green-400">2,000+</p>
                        <p class="mt-2 text-sm text-gray-300">
                            Verified farmers empowered with digital tools and analytics
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600 mx-auto">
                            <i class="fas fa-building"></i>
                        </div>
                        <p class="mt-5 text-4xl font-semibold text-green-400">50+</p>
                        <p class="mt-2 text-sm text-gray-300">
                            Agro-industries sourcing more efficiently through our network
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-lg font-medium text-white">Food Security</h3>
                        <p class="mt-2 text-gray-300 text-sm">
                            By reducing waste and improving distribution efficiency, FassiAgro contributes to national food
                            security goals and helps stabilize prices.
                        </p>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-lg font-medium text-white">Women Empowerment</h3>
                        <p class="mt-2 text-gray-300 text-sm">
                            60% of our farmer users are women. We provide special training programs and financing options
                            for women-led cooperatives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->
    <section class="gradient-bg text-white py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                Join the digital revolution of African agriculture
            </h2>
            <p class="mt-4 max-w-2xl text-xl mx-auto">
                Whether you're a farmer, buyer, investor, or partner - FassiAgro has solutions tailored for you.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-orange-700 bg-white hover:bg-gray-50 transition duration-150">
                    Get Started Today
                </a>
                <a href="#"
                    class="px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:bg-opacity-10 transition duration-150">
                    Book a Demo
                </a>
                <a href="#"
                    class="px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:bg-opacity-10 transition duration-150">
                    Partner With Us
                </a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-50 pt-12 pb-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">About</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Our Story</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Team</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Careers</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Partners</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Help Center</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Contact Us</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">FAQs</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Training</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Legal</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Privacy</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Terms</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Cookie Policy</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">GDPR</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Connect</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Press</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-green-600">Events</a></li>
                        <li class="flex space-x-6 mt-6">
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-xl font-bold text-green-600">Fassi<span class="text-orange-500">Agro</span></div>
                    <p class="mt-4 md:mt-0 text-sm text-gray-500">
                        © 2023 FassiAgro Technologies. All rights reserved. Yaoundé, Cameroon.
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection()
@section('script')

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('bg-gray-50');
        });
    </script>

@endsection()
