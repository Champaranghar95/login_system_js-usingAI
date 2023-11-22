<?php
session_start();

// Hardcoded user credentials for demonstration
$valid_username = "username";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION["loggedin"] = true;
        header("Location: dashboard.php"); // Redirect to dashboard on successful login
        exit;
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
