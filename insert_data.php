<?php
// insert_data.php
include 'config.php'; // Include your database connection file
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode($_POST['data'], true);
    $ch = isset($_POST['ch']) ? $_POST['ch'] : '';
   
    if (isset($data) && is_array($data)) {
        foreach ($data as $rowData) {
            // Convert the value of Urgence to an integer
            $urgenceValue = (int)$rowData[12];

            // Escape the data as needed (be cautious about SQL injection)
            $escapedCh = mysqli_real_escape_string($conn, urldecode($ch));

            $escapedData = array_map(function ($value) use ($conn) {
                return mysqli_real_escape_string($conn, urldecode($value));
            }, $rowData);

            // Perform the database insert operation
            $query = "INSERT INTO metalique (design, U, Qte, demandeur, affectation, observation, PU_FF, PT_FF, PU_MO, PT_MO, PU_A, PT_A, Urgence, date ,id_c) VALUES (
                '{$escapedData[0]}',
                '{$escapedData[1]}',
                '{$escapedData[2]}',
                '{$escapedData[3]}',
                '{$escapedData[4]}',
                '{$escapedData[5]}',
                '{$escapedData[6]}',
                '{$escapedData[7]}',
                '{$escapedData[8]}',
                '{$escapedData[9]}',
                '{$escapedData[10]}',
                '{$escapedData[11]}',
                $urgenceValue,
                '{$escapedData[13]}',
                '$escapedCh'
            )";

            // Execute the query using your database connection
            if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }

        $response = 'Data inserted successfully';
    } else {
        $response = 'No data received in the request';
    }
} else {
    $response = 'Invalid request method. Expected POST.';
}

// Send the response
echo $response;
$conn->close(); // Close the database connection
?>
