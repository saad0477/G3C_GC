
<?php
// Include your database connection file
include('config.php');

// Retrieve filter criteria
// $mois = $_POST['mois'];
// $annee = $_POST['annee'];

// $id_c = $_POST['id_c'];

 
$result = $conn->query("SELECT * FROM metalique ");
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
