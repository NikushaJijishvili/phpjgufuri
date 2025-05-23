<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (!isset($_SESSION['registered_users'][$email])) {
    $_SESSION['error'] = "Email not found.";
    header("Location: index.php");
    exit();
}

$hashed = $_SESSION['registered_users'][$email];
if (password_verify($password, $hashed)) {
    $_SESSION['user'] = $email;
    $_SESSION['success'] = "Logged in successfully!";
    header("Location: index.php");
    exit();
} else {
    $_SESSION['error'] = "Wrong password.";
    header("Location: index.php");
    exit();
}
