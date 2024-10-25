<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($email == "test@example.com" && $password == "password123") {
        echo "Login successful! Welcome back, " . htmlspecialchars($email) . ".";
    } else {
        echo "Invalid email or password. Please try again.";
    }
}
?>
