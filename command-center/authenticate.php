<?php
session_start();

// Hard-coded credentials for demonstration
$correct_username = 'admin';
$correct_password = 'password123'; // In a real application, use hashed passwords

// Check if data was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate credentials
    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['logged_in'] = true;
        header("Location: protected_page.php");
        exit;
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.php");
        exit;
    }
}
?>
