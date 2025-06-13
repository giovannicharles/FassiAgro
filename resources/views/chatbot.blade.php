<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FassiBot - Votre assistant agricole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animation for message appearing */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message {
            animation: fadeIn 0.3s ease-out;
        }

        /* Custom scrollbar */
        .chat-container::-webkit-scrollbar {
            width: 6px;
        }

        .chat-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .chat-container::-webkit-scrollbar-thumb {
            background: #9CA3AF;
            border-radius: 10px;
        }

        .chat-container::-webkit-scrollbar-thumb:hover {
            background: #6B7280;
        }

        /* Pulse animation for microphone */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }

        .pulse {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>

<body class="bg-gray-50 h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-green-600 text-white p-4 shadow-md">
        <div class="flex items-center justify-between max-w-4xl mx-auto">
            <div class="flex items-center space-x-3">
                <div class="bg-white rounded-full p-2">
                    <i class="fas fa-robot text-2xl text-green-600"></i>
                </div>
                <div>
                    <h1 class="font-bold text-xl">FassiBot</h1>
                    <p class="text-xs text-green-100">Votre assistant agricole</p>
                </div>
            </div>
            <button class="p-2 rounded-full hover:bg-green-700 transition">
                <i class="fas fa-ellipsis-v"></i>
            </button>
        </div>
    </header>

    <!-- Chat container -->
    <div id="chat-container" class="flex-1 overflow-y-auto p-4 space-y-4 chat-container max-w-4xl mx-auto w-full">
        <!-- Welcome message -->
        <div class="message flex items-start space-x-3">
            <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                <i class="fas fa-robot text-green-600"></i>
            </div>
            <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                <p class="font-medium text-green-600">Bonjour! 👋</p>
                <p class="text-gray-700 mt-1">Je suis FassiBot, votre assistant agricole intelligent. Posez-moi des
                    questions sur les périodes de plantation, les prix du marché, les conseils agricoles ou tout ce qui
                    concerne l'agriculture au Cameroun.</p>
                <div class="flex flex-wrap gap-2 mt-3">
                    <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full flex items-center">
                        <i class="fas fa-seedling mr-1"></i>
                        Tendances agricoles
                    </span>
                    <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full flex items-center">
                        <i class="fas fa-calendar-day mr-1"></i>
                        Périodes de plantation
                    </span>
                    <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full flex items-center">
                        <i class="fas fa-coins mr-1"></i>
                        Prix du marché
                    </span>
                </div>
            </div>
        </div>

        <!-- Example bot message -->
        <div class="message flex items-start space-x-3">
            <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                <i class="fas fa-robot text-green-600"></i>
            </div>
            <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                <p class="text-gray-700">Voici les produits agricoles en tendance cette semaine au Cameroun :</p>
                <div class="mt-2 space-y-2">
                    <div class="flex items-center p-2 rounded-md bg-orange-50">
                        <i class="fas fa-seedling mr-2 text-orange-500"></i>
                        <div class="flex-1">
                            <p class="font-medium">Cacao</p>
                            <p class="text-xs text-gray-500">Demande élevée sur marché international</p>
                        </div>
                        <span class="text-xs font-bold text-green-600 px-2 py-1 bg-green-100 rounded-full">+12%</span>
                    </div>
                    <div class="flex items-center p-2 rounded-md bg-orange-50">
                        <i class="fas fa-carrot mr-2 text-orange-500"></i>
                        <div class="flex-1">
                            <p class="font-medium">Manioc</p>
                            <p class="text-xs text-gray-500">Prix stable sur marché local</p>
                        </div>
                    </div>
                    <div class="flex items-center p-2 rounded-md bg-orange-50">
                        <i class="fas fa-pepper-hot mr-2 text-orange-500"></i>
                        <div class="flex-1">
                            <p class="font-medium">Piment</p>
                            <p class="text-xs text-gray-500">Demande en hausse à Douala</p>
                        </div>
                        <span class="text-xs font-bold text-green-600 px-2 py-1 bg-green-100 rounded-full">+7%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Suggested questions (chips) -->
    <div class="px-4 pb-2 max-w-4xl mx-auto w-full">
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <button onclick="sendSuggestedQuestion(this)"
                class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-chart-line mr-1"></i>
                Quels sont les produits en tendance ?
            </button>
            <button onclick="sendSuggestedQuestion(this)"
                class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-money-bill-wave mr-1"></i>
                Prévision du prix du cacao
            </button>
            <button onclick="sendSuggestedQuestion(this)"
                class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-calendar-alt mr-1"></i>
                Quand récolter le manioc ?
            </button>
        </div>
    </div>

    <!-- Input area -->
    <div class="bg-white border-t border-gray-200 p-4 sticky bottom-0 max-w-4xl mx-auto w-full">
        <div class="flex items-center space-x-2">
            <div class="flex-1 relative">
                <input id="user-input" type="text" placeholder="Posez une question... (ex: Quand semer le maïs ?)"
                    class="w-full p-3 pr-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <button id="voice-btn" class="absolute right-3 top-3 text-gray-500 hover:text-green-600 transition">
                    <i class="fas fa-microphone"></i>
                </button>
            </div>
            <button id="send-btn"
                class="bg-green-600 hover:bg-green-700 text-white rounded-full p-3 transition transform hover:scale-105">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <script>
        // DOM elements
        const chatContainer = document.getElementById('chat-container');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');
        const voiceBtn = document.getElementById('voice-btn');

        // Function to add a new user message
        function addUserMessage(message) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message flex items-start justify-end space-x-3';
            messageDiv.innerHTML = `
                <div class="bg-green-600 text-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                    <div class="absolute -right-1 top-4 w-3 h-3 transform rotate-45 bg-green-600"></div>
                    <p>${message}</p>
                </div>
                <div class="flex-shrink-0 bg-green-600 text-white rounded-full p-2">
                    <i class="fas fa-user"></i>
                </div>
            `;
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;

            // Clear input
            userInput.value = '';

            // Show typing indicator
            showTypingIndicator();

            // Simulate bot response after a delay
            setTimeout(() => {
                removeTypingIndicator();
                addBotResponse(message);
            }, 1500);
        }

        // Function to show typing indicator
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.id = 'typing-indicator';
            typingDiv.className = 'message flex items-start space-x-3';
            typingDiv.innerHTML = `
                <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                    <i class="fas fa-robot text-green-600"></i>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[40%] relative">
                    <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.3s"></div>
                    </div>
                </div>
            `;
            chatContainer.appendChild(typingDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Function to remove typing indicator
        function removeTypingIndicator() {
            const typingIndicator = document.getElementById('typing-indicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }

        // Function to add bot response
        async function addBotResponse(userMessage) {
            try {
                const response = await fetch('/api/chatbot', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        // ajoute ce header si tu utilises Sanctum ou une API auth
                         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        message: userMessage
                    })
                });

                const data = await response.json();
                const reply = data.reply || "Je n'ai pas pu obtenir une réponse pour le moment.";

                const messageDiv = document.createElement('div');
                messageDiv.className = 'message flex items-start space-x-3';
                messageDiv.innerHTML = `
            <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                <i class="fas fa-robot text-green-600"></i>
            </div>
            <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                <p class="text-gray-700">${reply}</p>
            </div>
        `;
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;

            } catch (error) {
                console.error(error);
                removeTypingIndicator();

                const errorDiv = document.createElement('div');
                errorDiv.className = 'message flex items-start space-x-3';
                errorDiv.innerHTML = `
            <div class="flex-shrink-0 bg-red-100 rounded-full p-2">
                <i class="fas fa-exclamation-triangle text-red-600"></i>
            </div>
            <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                <p class="text-red-600">Une erreur est survenue. Veuillez réessayer plus tard.</p>
            </div>
        `;
                chatContainer.appendChild(errorDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
        }
        // Function for suggested questions
        function sendSuggestedQuestion(button) {
            const question = button.textContent.trim();
            addUserMessage(question);
        }

        // Event listeners
        sendBtn.addEventListener('click', () => {
            const message = userInput.value.trim();
            if (message) {
                addUserMessage(message);
            }
        });

        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                const message = userInput.value.trim();
                if (message) {
                    addUserMessage(message);
                }
            }
        });

        // Voice recognition (simplified UI for demo)
        let isListening = false;
        voiceBtn.addEventListener('click', () => {
            if (!isListening) {
                voiceBtn.classList.add('text-green-600', 'pulse');
                voiceBtn.innerHTML = '<i class="fas fa-microphone-slash"></i>';
                isListening = true;

                // In a real app, this would initialize voice recognition
                setTimeout(() => {
                    // Simulate voice input after 2 seconds
                    const voiceResponses = [
                        "Quand planter du riz dans le Nord?",
                        "Prix actuel du cacao",
                        "Conseils pour cultiver du piment",
                        "Quelles sont les maladies courantes du cacao?"
                    ];

                    const randomResponse = voiceResponses[Math.floor(Math.random() * voiceResponses
                    .length)];
                    userInput.value = randomResponse;

                    // Stop listening
                    voiceBtn.classList.remove('text-green-600', 'pulse');
                    voiceBtn.innerHTML = '<i class="fas fa-microphone"></i>';
                    isListening = false;
                }, 2000);
            } else {
                // Stop listening
                voiceBtn.classList.remove('text-green-600', 'pulse');
                voiceBtn.innerHTML = '<i class="fas fa-microphone"></i>';
                isListening = false;
            }
        });

        // Scroll chat to bottom initially
        chatContainer.scrollTop = chatContainer.scrollHeight;
    </script>
</body>

</html>
