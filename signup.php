<?php
// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can add your database logic here to store the new user information
    // For simplicity, we'll just display a message indicating successful signup
    echo "Signup successful for username: $username";
}
?>
