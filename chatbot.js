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
        'hej': 'Hej! Hur kan jag stå till tjänst?',
        'vem är du': 'Jag är en mycket enkel prototyp/placeholder på en chatbot. Tanken är att kunder ska kunna fråga mig om enkla saker så de slipper ringa kundtjänst.',
        'hejdå': 'Hejdå! Ha en trevlig dag!',
        // Add more responses as needed
    };

    const response = responses[userMessage.toLowerCase()] || 'Jag ber om ursäkt, Eftersom jag endast är en prototyp/placeholder kan jag bara svara på "hej", "vem är du" och "hejdå". ';
    displayMessage(response, 'bot');
}

// Function to toggle the visibility of the chatbot container
function toggleChatbot() {
    const chatbotContainer = document.getElementById('chatbot-container');
    chatbotContainer.classList.toggle('hidden');
}
