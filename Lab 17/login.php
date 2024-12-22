<?php
// Predefined credentials
$validUsername = "admin";
$validPassword = "12345";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        echo "Login Successful";
    } else {
        echo "Invalid Credentials";
    }
}
?>
