<!DOCTYPE html>
<html>

<head>
    <title>Login System</title>
</head>

<body>
    <h1>Login Form</h1>

    <?php
    session_start();

    // Connect to MySQL database
    $mysqli = new mysqli('localhost', 'username', 'password', 'users');

    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    // Get user credentials from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before comparing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if user exists and password matches
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // User found, log them in
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username;
        header('Location: profile.php');
    } else {
        // Invalid credentials, display error message
        echo 'Invalid username or password.';
    }
    ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <br>

        <button type="submit">Login</button>
    </form>
</body>

</html>