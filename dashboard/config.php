<?php

$host = "localhost"; // Replace with your database host
$user = "root"; // Replace with your database username
$password = "root"; // Replace with your database password
$database = "g3_casa"; // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}


?>
