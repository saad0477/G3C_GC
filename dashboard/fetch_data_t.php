<?php
// Include the database configuration
include('config.php');

// Fetch data from the Transport table
$result = $conn->query("SELECT * FROM Transport order by date ASC");
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
