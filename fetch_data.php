<?php
// Include your database connection file
include('config.php');

// Retrieve filter criteria
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$id_e = $_POST['id_e'];
$id_c = $_POST['id_c'];

$sql = "SELECT * FROM montant WHERE mois = '$mois' AND année = '$annee' AND id_e = '$id_e' AND id_c = '$id_c'";
$result = $conn->query($sql);

// Check for errors in the query execution
if (!$result) {
    die('Error in SQL query: ' . $conn->error);
}

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Start building the table HTML
    $tableHTML = '<table class="table">';
    // $tableHTML .= '<thead>';
    // $tableHTML .= '<tr>';
    // $tableHTML .= '<th>Mois</th>';
    // $tableHTML .= '<th>Année</th>';
    // $tableHTML .= '<th>id_e</th>';
    // $tableHTML .= '<th>id_c</th>';
    // $tableHTML .= '</tr>';
    // $tableHTML .= '</thead>';
    $tableHTML .= '<tbody>';

    // Loop through each row in the result set
  
    // ... Your existing PHP code ...
    
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        $tableHTML .= '<tr>';
        $tableHTML .= '<td><input type="text" id="edit_mois_' . $row['id_m'] . '" value="' . $row['mois'] . '"></td>';
        $tableHTML .= '<td><input type="text" id="edit_annee_' . $row['id_m'] . '" value="' . $row['année'] . '"></td>';
        $tableHTML .= '<td><input type="text" id="edit_prestation_' . $row['id_m'] . '" value="' . $row['prestation'] . '"></td>';
        $tableHTML .= '<td><input type="text" id="edit_montant_' . $row['id_m'] . '" value="' . $row['Montant'] . '"></td>';
        $tableHTML .= '<td><button class="btn btn-success" onclick="saveEdit(' . $row['id_m'] . ')">Save</button></td>';
        $tableHTML .= '</tr>';
    }
    
    // ... The rest of your existing PHP code ...
  
    
    

    $tableHTML .= '</tbody>';
    $tableHTML .= '</table>';

    // Return the table HTML as part of the AJAX response
    echo $tableHTML;
} else {
    echo 'No data found';
}

// Close the database connection
$conn->close();
?>
