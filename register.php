<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Check if already registered
if (isset($_SESSION['registered_users'][$email])) {
    $_SESSION['error'] = "This email is already registered.";
    header("Location: index.php");
    exit();
}

// Save to session (in real apps: save to database)
$_SESSION['registered_users'][$email] = password_hash($password, PASSWORD_DEFAULT);
$_SESSION['success'] = "Registration successful!";
header("Location: index.php");
exit();

