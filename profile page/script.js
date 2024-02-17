document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;
    const colors = ['skyblue', 'lightgreen', 'lightpink', 'lavender', 'peachpuff', 'lightyellow'];
    let currentColorIndex = 0; // Keeps track of the current color

    const greeting = document.getElementById('greeting');
    const hour = new Date().getHours();
    const greetingText = hour < 12 ? 'Good Morning' : hour < 18 ? 'Good Afternoon' : 'Good Evening';
    greeting.innerText = greetingText + ', Welcome to My Profile!';

    body.addEventListener('click', function() {
        // Update the body's background color
        body.style.backgroundColor = colors[currentColorIndex];
        currentColorIndex = (currentColorIndex + 1) % colors.length; // Move to the next color, loop back to start if at the end
    });
});

function sendMessage() {
    const inputField = document.getElementById('userInput');
    const chatOutput = document.getElementById('chatOutput');
    const userText = inputField.value;
    inputField.value = ''; // Clear the input field after sending
  
    displayMessage(userText, 'user');
  
    // Adjust the fetch URL if necessary, depending on where your server code is hosted
    fetch('/chat', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ message: userText }),
    })
      .then(response => response.json())
      .then(data => {
        displayMessage(data.reply, 'bot');
      })
      .catch(error => console.error('Error:', error));
  }
  
  function displayMessage(message, sender) {
    const chatOutput = document.getElementById('chatOutput');
    const messageDiv = document.createElement('div');
    messageDiv.textContent = message;
    messageDiv.className = sender; // This is to style user and bot messages differently
    chatOutput.appendChild(messageDiv);
  }
  