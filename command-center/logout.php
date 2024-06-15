<?php
session_start();

// Clear the session data and destroy the session
$_SESSION = [];
session_destroy();

// Redirect to login page
header("Location: login.php");
exit;
