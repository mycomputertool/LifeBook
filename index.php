<?php
session_start();

// Simulated database credentials
$valid_username = "user";
$valid_password = "password";

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are valid
if ($username === $valid_username && $password === $valid_password) {
    // Authentication successful, redirect to homepage
    $_SESSION['username'] = $username;
    header("Location: home.html");
    exit();
} else {
    // Authentication failed, redirect back to login page with error message
    header("Location: index.html?error=1");
    exit();
}
?>
