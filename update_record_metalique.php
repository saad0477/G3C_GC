<?php
// Include your database connection file
include('config.php');

// Retrieve data from the POST request
$id = $_POST['id'];
$editedDesign = $_POST['editedDesign'];
$editedU = $_POST['editedU'];
$editedQte = $_POST['editedQte'];
$editedDemandeur = $_POST['editedDemandeur'];
$editedAffectation = $_POST['editedAffectation'];
$editedObservation = $_POST['editedObservation'];
$editedPU_FF = $_POST['editedPU_FF'];
$editedPT_FF = $_POST['editedPT_FF'];
$editedPU_MO = $_POST['editedPU_MO'];
$editedPT_MO = $_POST['editedPT_MO'];
$editedPU_A = $_POST['editedPU_A'];
$editedPT_A = $_POST['editedPT_A'];
$editedUrgence = $_POST['editedUrgence'];
$editedDate = $_POST['editedDate'];

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
    Urgence = '$editedUrgence',
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
