<?php session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or wherever you want
header('Location: login.php');
exit(); ?>