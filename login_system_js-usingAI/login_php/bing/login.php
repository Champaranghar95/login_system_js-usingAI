<?php
    // Start the session
    session_start();

    // Check if the form is submitted
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hardcoded username and password for demonstration
        $correct_username = 'admin';
        $correct_password = 'password';

        // Check if the username and password are correct
        if ($username == $correct_username && $password == $correct_password) {
            // Set the session variable
            $_SESSION['loggedin'] = true;

            // Redirect to the dashboard
            header('Location: dashboard.php');
            exit;
        } else {
            // Show an error message
            echo 'Incorrect username or password.';
        }
    }
?>

<!-- The login form -->
<form method="post" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Log in">
</form>
