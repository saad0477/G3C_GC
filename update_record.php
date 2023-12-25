<?php
// Include your database connection file
include('config.php');

// Retrieve data from the POST request
$id = $_POST['id'];
$editedMois = $_POST['editedMois'];
$editedAnnee = $_POST['editedAnnee'];
$editedPrestation = $_POST['editedPrestation'];
$editedMontant = $_POST['editedMontant'];

// Perform the update query
$updateQuery = "UPDATE montant SET mois = '$editedMois', année = '$editedAnnee', prestation = '$editedPrestation', Montant = '$editedMontant' WHERE id_m = '$id'";
$updateResult = $conn->query($updateQuery);

// Check for errors in the update query execution
if (!$updateResult) {
    die('Error in SQL update query: ' . $conn->error);
}

// Close the database connection
$conn->close();
?>
