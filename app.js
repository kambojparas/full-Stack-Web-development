document.getElementById('sendMessage').addEventListener('click', () => {
  const messageInput = document.getElementById('messageInput');
  const message = messageInput.value.trim();

  if (message) {
    const chatArea = document.getElementById('chatArea');
    
    // Create the message bubble
    const messageBubble = document.createElement('div');
    messageBubble.className = 'text-right mb-4';
    messageBubble.innerHTML = `<p class="bg-blue-500 text-white inline-block p-2 rounded-lg">${message}</p>`;

    // Append to chat area
    chatArea.appendChild(messageBubble);
    chatArea.scrollTop = chatArea.scrollHeight;

    // Clear input field
    messageInput.value = '';
  }
});

// Optional: Handle 'Enter' key press to send message
document.getElementById('messageInput').addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    e.preventDefault();
    document.getElementById('sendMessage').click();
  }
});
