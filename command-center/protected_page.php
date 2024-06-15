<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// User is logged in, display the protected content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome to the Protected Page</h1>
    <p>You have successfully logged in and can view this content.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
