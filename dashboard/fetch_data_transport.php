
<?php
// Include your database connection file
include('config.php');

// Retrieve filter criteria
$mois = $_POST['mois'];
$annee = $_POST['annee'];

$id_c = $_POST['id_c'];

$sql = "SELECT * FROM montant WHERE MONTH(date) = '$mois' AND YEAR(date)= '$annee' AND id_c=$id_c and id_e=10";
$result = $conn->query($sql);

// Check for errors in the query execution
if (!$result) {
    die('Error in SQL query: ' . $conn->error);
}

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Start building the table HTML
    $tableHTML = '<table class="table" border="1">';
    // $tableHTML .= '<thead>';
    // $tableHTML .= '<tr>';
    // $tableHTML .= '<th>design</th>';
    // $tableHTML .= '<th>U</th>';
    // $tableHTML .= '<th>Qté</th>';
    // $tableHTML .= '<th>demandeur</th>';
    // $tableHTML .= '</tr>';
    // $tableHTML .= '</thead>';
    $tableHTML .= '<tbody id="tableBody">';

    // Loop through each row in the result set
  
    
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td id="edit_design_' . $row['id'] . '">' . $row['design'] . '</td>';
        echo '<td id="edit_U_' . $row['id'] . '">' . $row['U'] . '</td>';
        echo '<td id="edit_Qte_' . $row['id'] . '">' . $row['Qte'] . '</td>';
        echo '<td id="edit_demandeur_' . $row['id'] . '">' . $row['demandeur'] . '</td>';
        echo '<td id="edit_affectation_' . $row['id'] . '">' . $row['affectation'] . '</td>';
        echo '<td id="edit_observation_' . $row['id'] . '">' . $row['observation'] . '</td>';
        echo '<td id="edit_PU_FF_' . $row['id'] . '">' . $row['PU_FF'] . '</td>';
        echo '<td id="edit_PT_FF_' . $row['id'] . '">' . $row['PT_FF'] . '</td>';
        echo '<td id="edit_PU_MO_' . $row['id'] . '">' . $row['PU_MO'] . '</td>';
        echo '<td id="edit_PT_MO_' . $row['id'] . '">' . $row['PT_MO'] . '</td>';
        echo '<td id="edit_PU_A_' . $row['id'] . '">' . $row['PU_A'] . '</td>';
        echo '<td id="edit_PT_A_' . $row['id'] . '">' . $row['PT_A'] . '</td>';
        echo '<td id="edit_Urgence_' . $row['id'] . '">' . $row['Urgence'] . '</td>';
        echo '<td id="edit_date_' . $row['id'] . '">' . $row['date'] . '</td>';
        echo '<td id="edit_Prix_Totale_' . $row['id'] . '">' . $row['Prix_Totale'] . '</td>';
        echo '</tr>';
    }
  
    
    
 

    // Return the table HTML as part of the AJAX response
    // echo $tableHTML;
} else {
    echo 'No data found';
}

// Close the database connection
$conn->close();
?>
