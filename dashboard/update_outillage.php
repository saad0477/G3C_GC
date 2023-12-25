<?php
// Include your database configuration file
include('config.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $chantier =$_POST['chantier'];
    $id = $_POST['id'];
    $design = $_POST['design'];
    $date = $_POST['date'];
    $U = $_POST['U'];
    $Qte = $_POST['Qte'];
    $PU = $_POST['PU'];
   $id_c=   $_POST['id_c'];
echo $id.'hhhhh';
    // Update the data in the database
    $sql = "UPDATE outillage SET
        chantier='$chantier',
           date = '$date',
            design = '$design',
            U = '$U',
            Qte = '$Qte',
            PU = '$PU',
            id_c='$id_c'
        
            
            WHERE id = $id";
$x=$conn->query($sql);
    if ($conn->query($sql) === TRUE) {


        // $query ="SELECT * from outillage where id =$id";
 
        // $data = $conn->query($query);
        echo json_encode(['success' => true, 'message' => 'Data updated successfully' ]);
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
