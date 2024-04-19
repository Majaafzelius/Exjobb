// Function to handle user input
function handleUserInput() {
    const inputField = document.getElementById('chat-input');
    const userMessage = inputField.value.trim();

    if (userMessage) {
        displayMessage(userMessage, 'user');
        inputField.value = ''; // Clear the input field
        respondToUser(userMessage);
    }
}

// Function to handle key down event (e.g. pressing Enter key)
function handleKeyDown(event) {
    if (event.key === 'Enter') {
        handleUserInput();
    }
}

// Function to display a message in the chat display
function displayMessage(message, sender) {
    const chatDisplay = document.getElementById('chat-display');
    const messageElement = document.createElement('div');
    messageElement.className = sender;
    messageElement.textContent = message;

    chatDisplay.appendChild(messageElement);
    chatDisplay.scrollTop = chatDisplay.scrollHeight; // Scroll to the bottom
}

// Function to respond to user input
function respondToUser(userMessage) {
    const responses = {
        'hello': 'Hi! How can I help you?',
        'how are you': 'I\'m just a bot, but I\'m here to assist you!',
        'bye': 'Goodbye! Have a great day!',
        // Add more responses as needed
    };

    const response = responses[userMessage.toLowerCase()] || 'Sorry, I didn\'t understand that. Can you rephrase?';
    displayMessage(response, 'bot');
}

// Function to toggle the visibility of the chatbot container
function toggleChatbot() {
    const chatbotContainer = document.getElementById('chatbot-container');
    chatbotContainer.classList.toggle('hidden');
}
