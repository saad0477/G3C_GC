<?php
// Include the database configuration
include('config.php');



$mois = $_POST['mois'];
$annee = $_POST['annee'];

$id_c = $_POST['id_c'];

// Fetch data from the Transport table
$result = $conn->query("SELECT * FROM Transport where MONTH(date) = '$mois' AND YEAR(date)= '$annee' AND id_c=$id_c ");
$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
 
}

// Close the database connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
