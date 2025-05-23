
<?php
session_start();
unset($_SESSION['user']);
$_SESSION['success'] = "Logged out.";
header("Location: index.php");
exit();
