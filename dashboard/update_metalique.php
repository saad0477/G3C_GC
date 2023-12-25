<?php
// Include your database connection file
include('config.php');

// Retrieve data from the POST request
$id =   $_POST['id'] ;
$editedDesign =   $_POST['design'] ;
$editedU =  $_POST['U']  ;
$editedQte =  $_POST['Qte'] ;
$editedDemandeur =   $_POST['demandeur'] ;
$editedAffectation =   $_POST['affectation']  ;
$editedObservation =   $_POST['observation']  ;
$editedPU_FF =   $_POST['PU_FF']  ;
$editedPT_FF =   $_POST['PT_FF']  ;
$editedPU_MO =  $_POST['PU_MO']  ;
$editedPT_MO =   $_POST['PT_MO']  ;
$editedPU_A =  $_POST['PU_A'] ;
$editedPT_A =  $_POST['PT_A']  ;
$editedUrgence =  $_POST['Urgence'] ;
$editedDate = $_POST['Date'] ;
// Log values for debugging
echo $editedDesign .$editedQte .$editedDemandeur.$editedAffectation.$editedDate ;

// Perform the update query
$updateQuery = "UPDATE metalique SET
    design = '$editedDesign',
    U = '$editedU',
    Qte = '$editedQte',
    demandeur = '$editedDemandeur',
    affectation = '$editedAffectation',
    observation = '$editedObservation',
    PU_FF = '$editedPU_FF',
    PT_FF = '$editedPT_FF',
    PU_MO = '$editedPU_MO',
    PT_MO = '$editedPT_MO',
    PU_A = '$editedPU_A',
    PT_A = '$editedPT_A',
    urgence = '$editedUrgence',
    date = '$editedDate'
    WHERE id = '$id'";


$updateResult = $conn->query($updateQuery);

// Check for errors in the update query execution
if (!$updateResult) {
    die('Error in SQL update query: ' . $conn->error);
}

// Close the database connection
$conn->close();
?>
