const loginForm = document.getElementById('loginForm');
const errorMessageElement = document.getElementById('error-message');

loginForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Simulate a login request to a server
    if (username === 'admin' && password === 'admin123') {
        // Successful login
        alert('Login successful!');
    } else {
        // Invalid login
        errorMessageElement.textContent = 'Invalid username or password.';
    }
});
