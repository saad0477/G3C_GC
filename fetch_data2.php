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
        $tableHTML .= '<td>' . $row['mois'] . '</td>';
        $tableHTML .= '<td>' . $row['année'] . '</td>';
        $tableHTML .= '<td>' . $row['prestation'] . '</td>';
        $tableHTML .= '<td>' . $row['Montant'] . '</td>';
        // Add an "Edit" button with an onclick function to handle the edit action
         $tableHTML .= '</tr>';
    
    // ... The rest of your existing PHP code ...
  
    }
    

    $tableHTML .= '</tbody>';
    $tableHTML .= '</table>';
    echo " <input type='hidden' id='moisv' value='".$mois."'>";
    echo " <input type='hidden' id='anneev' value='".$annee."'>";
    echo " <input type='hidden' id='chantierv' value='".$id_c."'>";

    // Return the table HTML as part of the AJAX response
    echo $tableHTML;
    echo "<hr>";
    $query = "SELECT count(id_v) AS count_val FROM validation WHERE chantier = $id_c AND mois = $mois AND année = $annee;";
    $result = $conn->query($query);
    
    if ($result) {
        // Fetch the associative array
        $row = $result->fetch_assoc();
    
        // Access the count value using the alias 'count_val'
        $count = $row['count_val'];
        if ($count == 0) {echo'  <div class="modal-footer" style="width:100%">
             <button type="button" class="btn btn-success" onclick="valider()">valider</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>';
        }else { echo'  <div class="modal-footer" style="width:100%">
            <button type="button" class="btn btn-success"  disabled>validé</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>';};
        // Output or use the count value as needed
    }
} else {
    echo 'No data found';
}

// Close the database connection
$conn->close();
?>
