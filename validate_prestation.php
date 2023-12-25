<?php
// Include your database connection file
include('config.php');

// Retrieve data from the POST request
 
$moisv = $_POST['moisv'];
$anneev = $_POST['anneev'];
$chantierv = $_POST['chantierv'];
 
// Perform the update query
$Query = "Insert into validation (chantier,mois,année) values ('$chantierv','$moisv','$anneev' );";
$Result = $conn->query($Query);

// Check for errors in the update query execution
if (!$Result) {
    die('Error in SQL insert query: ' . $conn->error);
}

// Close the database connection
$conn->close();
?>
