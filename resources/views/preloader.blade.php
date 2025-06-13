@extends('layouts.app')
@section('title', 'Preloader FassiAgro')
@section('style')
    <style>
        @keyframes leafGrow {
            0% {
                transform: rotate(0deg) scale(0.8);
                opacity: 0.7;
            }

            50% {
                transform: rotate(10deg) scale(1.1);
                opacity: 1;
            }

            100% {
                transform: rotate(0deg) scale(0.8);
                opacity: 0.7;
            }
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

        @keyframes moveDataNodes {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            100% {
                transform: translateY(-20px) rotate(3deg);
            }
        }

        .data-node {
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: rgba(34, 197, 94, 0.2);
            border-radius: 50%;
            animation: moveDataNodes 3s infinite alternate ease-in-out;
        }

        .leaf-loader i {
            animation: leafGrow 1.5s infinite ease-in-out;
        }

        .logo-pulse {
            animation: pulse 2s infinite ease-in-out;
        }

        .crop-bg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20%;
            background: linear-gradient(to top, rgba(209, 250, 229, 0.7), transparent);
            z-index: 0;
        }
    </style>
@endsection

@section('content')


        <!-- Background elements -->
        <div class="data-node" style="top:10%; left:15%"></div>
        <div class="data-node" style="top:25%; right:20%; animation-delay: 0.3s"></div>
        <div class="data-node" style="top:40%; left:25%; animation-delay: 0.6s"></div>
        <div class="data-node" style="top:60%; right:30%; animation-delay: 0.9s"></div>
        <div class="data-node" style="top:75%; left:30%; animation-delay: 1.2s"></div>

        <!-- Subtle grid lines -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: linear-gradient(to right, #16a34a 1px, transparent 1px), linear-gradient(to bottom, #16a34a 1px, transparent 1px); background-size: 30px 30px;">
        </div>

        <!-- Crop background effect -->
        <div class="crop-bg"></div>

        <!-- Main loader container -->
        <div class="absolute inset-0 flex flex-col items-center justify-center z-10 p-4">
            <!-- Logo -->
            <div class="logo-pulse mb-8 flex items-center">
                <div class="w-12 h-12 rounded-full bg-green-600 flex items-center justify-center mr-3">
                    <i class="fas fa-leaf text-white text-xl"></i>
                </div>
                <div class="text-3xl font-bold">
                    <span class="text-green-600">Fassi</span><span class="text-orange-500">Agro</span>
                </div>
            </div>

            <!-- Leaf loader -->
            <div class="leaf-loader mb-6 text-green-500">
                <i class="fas fa-leaf text-5xl"></i>
            </div>

            <!-- Loading text -->
            <p class="text-gray-700 text-lg text-center max-w-md">
                Chargement de la plateforme intelligente FassiAgro...
            </p>

            <!-- Progress bar -->
            <div class="w-full max-w-xs bg-gray-200 rounded-full h-2.5 mt-8">
                <div class="bg-gradient-to-r from-green-500 to-orange-500 h-2.5 rounded-full animate-pulse"></div>
            </div>

            <!-- Subtle tagline -->
            <p class="text-gray 500 text-sm mt-6 text-center">
                Agriculture intelligente • Innovation technologique • Cameroon
            </p>
        </div>


@endsection

@section('script')
    <script>
        // Au chargement de la page
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('bg-gray-50 h-screen overflow-hidden relative');
        });
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                window.location.href = "{{ route('home') }}"; // ou une autre route
            }, 3500); // 2 secondes
        });
        // Simulate loading completion (remove this in production)
        setTimeout(() => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                // Here you would typically redirect or show the main content
                console.log("Loading complete!");
            }, 500);
        }, 3500);
    </script>

@endsection
