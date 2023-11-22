document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get input values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Your validation logic here (for example, check if the credentials are valid)
    if (username === 'Admin' && password === 'chat1234') {
      // Simulating successful login
      alert('Login successful');
      // You can redirect or perform other actions here after successful login
    } else {
      // Show error message for invalid credentials
      document.getElementById('error-msg').innerText = 'Invalid username or password';
    }
  });
  