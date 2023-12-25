<?php
// Include your database configuration file
include('config.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $id = $_POST['id'];
    $date = $_POST['Date'];
    $vehicule = $_POST['vehicule'];
    $demandeur = $_POST['demandeur'];
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $marchandise = $_POST['marchandise'];
    $tarif = $_POST['Tarif'];
    $id_c= $_POST['id_c'];
    // Update the data in the database
    $sql = "UPDATE Transport SET
            Date = '$date',
            vehicule = '$vehicule',
            demandeur = '$demandeur',
            depart = '$depart',
            arrivee = '$arrivee',
            marchandise = '$marchandise',
            Tarif = '$tarif',
            id_c='$id_c'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Data updated successfully'.$demandeur]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error updating data: ' . $conn->error]);
    }
} else {
    // If the request is not a POST request, return an error message
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Close the database connection
$conn->close();
?>
