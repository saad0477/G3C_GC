<?php
// Include your database configuration file
include('config.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $id = $_POST['id'];
    $chantier = $_POST['chantier'];
    $design = $_POST['design'];
    $date = $_POST['date'];
    $U = $_POST['U'];
    $Qte = $_POST['Qte'];
    $PU = $_POST['PU'];
    $NJ = $_POST['NJ'];
    $id_c= $_POST['id_c'];

    // Update the data in the database
    $sql = "UPDATE coffrage SET
            chantier='$chantier',
           date = '$date',
            design = '$design',
            U = '$U',
            Qte = '$Qte',
            PU = '$PU',
            NJ = '$NJ',
            id_c='$id_c'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Data updated successfully']);
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
