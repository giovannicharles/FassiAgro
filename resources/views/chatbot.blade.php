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
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
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
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }

        .pulse {
            animation: pulse 1.5s infinite;
        }

        /* Markdown styling */
        .bot-message-content h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            color: #2d3748;
            padding-bottom: 0.3rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .bot-message-content strong {
            font-weight: 600;
            color: #2d3748;
        }

        .bot-message-content ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .bot-message-content li {
            margin-bottom: 0.3rem;
        }

        .bot-message-content p {
            margin-bottom: 0.5rem;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #cbd5e0, transparent);
            margin: 1rem 0;
        }

        /* Nouveau style pour le bouton de réinitialisation */
        .reset-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #f8f9fa;
            border: 1px solid #e2e8f0;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .reset-btn:hover {
            background: #e2e8f0;
            transform: rotate(90deg);
        }
    </style>
</head>
<body class="bg-gray-50 h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-green-600 text-white p-4 shadow-md relative">
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

            <!-- Bouton de réinitialisation -->
            <button id="reset-btn" class="reset-btn" title="Nouvelle conversation">
                <i class="fas fa-sync-alt text-gray-600"></i>
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
                <p class="text-gray-700 mt-1">Je suis FassiBot, votre assistant agricole intelligent. Posez-moi des questions sur les périodes de plantation, les prix du marché, les conseils agricoles ou tout ce qui concerne l'agriculture au Cameroun.</p>
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
    </div>

    <!-- Suggested questions (chips) -->
    <div class="px-4 pb-2 max-w-4xl mx-auto w-full">
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <button onclick="sendSuggestedQuestion(this)" class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-chart-line mr-1"></i>
                Quels sont les produits en tendance ?
            </button>
            <button onclick="sendSuggestedQuestion(this)" class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-money-bill-wave mr-1"></i>
                Prévision du prix du cacao
            </button>
            <button onclick="sendSuggestedQuestion(this)" class="text-sm px-3 py-1.5 bg-green-50 text-green-700 rounded-full hover:bg-green-100 transition flex items-center">
                <i class="fas fa-calendar-alt mr-1"></i>
                Quand récolter le manioc ?
            </button>
        </div>
    </div>

    <!-- Input area -->
    <div class="bg-white border-t border-gray-200 p-4 sticky bottom-0 max-w-4xl mx-auto w-full">
        <div class="flex items-center space-x-2">
            <div class="flex-1 relative">
                <input
                    id="user-input"
                    type="text"
                    placeholder="Posez une question... (ex: Quand semer le maïs ?)"
                    class="w-full p-3 pr-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                >
                <button id="voice-btn" class="absolute right-3 top-3 text-gray-500 hover:text-green-600 transition">
                    <i class="fas fa-microphone"></i>
                </button>
            </div>
            <button id="send-btn" class="bg-green-600 hover:bg-green-700 text-white rounded-full p-3 transition transform hover:scale-105">
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
        }

        // Function to add a bot message with Markdown styling
        function addBotMessage(message, icon = "fas fa-robot") {
            // Convert Markdown to HTML
            const formattedMessage = formatMarkdownResponse(message);

            const messageDiv = document.createElement('div');
            messageDiv.className = 'message flex items-start space-x-3';
            messageDiv.innerHTML = `
                <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                    <i class="${icon} text-green-600"></i>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                    <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                    <div class="bot-message-content text-gray-700">${formattedMessage}</div>
                </div>
            `;
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Function to convert Markdown to HTML
        function formatMarkdownResponse(text) {
            // Replace Markdown with HTML equivalents
            let html = text
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // **bold**
                .replace(/### (.*?)(?:\n|$)/g, '<h3>$1</h3>') // ### Headers
                .replace(/---/g, '<div class="section-divider"></div>') // --- dividers
                .replace(/- (.*?)(?:\n|$)/g, '<li>$1</li>'); // - list items

            // Wrap lists in ul tags
            html = html.replace(/(<li>.*?<\/li>)/g, '<ul class="list-disc pl-5 mb-2">$1</ul>');

            // Add line breaks
            html = html.replace(/\n/g, '<br>');

            return html;
        }

        // Function to show typing indicator
        function showTypingIndicator() {
            // Remove any existing typing indicator
            removeTypingIndicator();

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

        // Function to send message to the server and get bot response
        async function sendToServer(message) {
            showTypingIndicator();

            try {
                const response = await fetch('/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message })
                });

                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }

                const data = await response.json();
                removeTypingIndicator();
                addBotMessage(data.reply);

            } catch (error) {
                removeTypingIndicator();
                addBotMessage("Désolé, une erreur s'est produite. Veuillez réessayer.", "fas fa-exclamation-triangle");
                console.error('Erreur:', error);
            }
        }

        // Function for suggested questions
        function sendSuggestedQuestion(button) {
            const question = button.textContent.trim();
            addUserMessage(question);
            sendToServer(question);
        }

        // Event listeners
        sendBtn.addEventListener('click', () => {
            const message = userInput.value.trim();
            if (message) {
                addUserMessage(message);
                sendToServer(message);
            }
        });

        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                const message = userInput.value.trim();
                if (message) {
                    addUserMessage(message);
                    sendToServer(message);
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

                    const randomResponse = voiceResponses[Math.floor(Math.random() * voiceResponses.length)];
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

        // Reset chat button event
        document.getElementById('reset-btn').addEventListener('click', () => {
            if (confirm('Voulez-vous commencer une nouvelle conversation ? L\'historique actuel sera effacé.')) {
                // Clear chat container
                chatContainer.innerHTML = '';

                // Re-add the welcome message
                const welcomeMessage = `
                    <div class="message flex items-start space-x-3">
                        <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                            <i class="fas fa-robot text-green-600"></i>
                        </div>
                        <div class="bg-white p-3 rounded-lg shadow-sm max-w-[85%] lg:max-w-[70%] relative">
                            <div class="absolute -left-1 top-4 w-3 h-3 transform rotate-45 bg-white"></div>
                            <p class="font-medium text-green-600">Bonjour! 👋</p>
                            <p class="text-gray-700 mt-1">Je suis FassiBot, votre assistant agricole intelligent. Posez-moi des questions sur les périodes de plantation, les prix du marché, les conseils agricoles ou tout ce qui concerne l'agriculture au Cameroun.</p>
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
                `;
                chatContainer.innerHTML = welcomeMessage;
                }

        });

        // Scroll chat to bottom initially
        chatContainer.scrollTop = chatContainer.scrollHeight;
    </script>
</body>
</html>
