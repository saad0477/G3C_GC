<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

         <!-- Include DataTables CSS and JS files -->    
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
 

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

 

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    </head>
   
 
<?php
// Include the database configuration
include('config.php');

// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Insert data into metaliqueTable (modify with your actual data)
     $editedDesign = $_POST['editedDesign'];
    $editedU =  $_POST['editU']  ;
    $editedQte =  $_POST['editQte'] ;
    $editedDemandeur =   $_POST['editedDemandeur']  ;
    $editedAffectation =  $_POST['id_cText']  ;
    $editedObservation = $_POST['editobservation']   ;
    $editedPU_FF =   $_POST['editPU_FF'] ;
    $editedPT_FF =   $_POST['editPT_FF']  ;
    $editedPU_MO =   $_POST['editPU_MO']  ;
    $editedPT_MO =  $_POST['editPT_MO']  ;
    $editedPU_A =   $_POST['editPU_A']  ;
    $editedPT_A =  $_POST['editPT_A']  ;
    $editedUrgence =   $_POST['editUrgence']  ;
    $editedDate =  $_POST['editdate'] ;
    $editedUrgence = intval($editedUrgence);
    $id_c=$_POST['id_c']  ;
    $sql = "INSERT INTO METALIQUE (design, U, Qte, demandeur, affectation, observation, PU_FF, PT_FF, PU_MO, PT_MO, PU_A, PT_A, Urgence, date,id_c ) 
            VALUES ('$editedDesign', '$editedU', '$editedQte', '$editedDemandeur', '$editedAffectation', '$editedObservation', '$editedPU_FF',' $editedPT_FF', '$editedPU_MO',
             '$editedPT_MO', '$editedPU_A', '$editedPT_A',  '$editedUrgence' , '$editedDate','$id_c')";

    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Reload DataTable after successful form submission
    echo "<script>$('#metaliqueTable').DataTable().ajax.reload();</script>";
}

// Close the database connection
$conn->close();
?>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="modifier_transport.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                modification
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">    
                    <h1 class="mt-4">Transport</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Transport</li>
                        </ol>
</div>
                    <div class="card mb-4"  style="width:80%; padding-left:10px">
                            <div class="card-body">              
                                <!-- HTML form for data input -->
                                <form method="post">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editedDesign">Design:</label>
                <input type="text" class="form-control" id="editedDesign" name="editedDesign">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editU">U:</label>
                <input type="text" class="form-control" id="editU" name="editU">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editQte">Qte:</label>
                <input type="text" class="form-control" id="editQte" name="editQte">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editedDemandeur">Demandeur:</label>
                <input type="text" class="form-control" id="editedDemandeur" name="editedDemandeur">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editaffectation">Affectation:</label>
                <select class="form-select form-select-lg mb-3"  id="id_c" name="id_c" required>
                                <?php
                                include 'config.php';


                                    $query = "SELECT * FROM chantier";
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='' disabled selected hidden>Choisir le chantier</option>";

                                            echo "<option value='" . $row['id_c'] . "' data-text='" . $row['name'] ."'>" . $row['name'] . "</option>";
                                        }
                                    }
                                    else echo"noonononon";
                                    $conn->close();
                                ?>
                            </select>
                            <input type="hidden" name="id_cText" id="id_cText" value="">
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    var select = document.getElementById("id_c");
                                    var hiddenInput = document.getElementById("id_cText");

                                    select.addEventListener("change", function () {
                                    var selectedOption = this.options[this.selectedIndex];
                                    hiddenInput.value = selectedOption.text;
                                    });
                                });
                                </script>


            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editobservation">Observation:</label>
                <input type="text" class="form-control" id="editobservation" name="editobservation">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPU_FF">PU_FF:</label>
                <input type="text" class="form-control" id="editPU_FF" name="editPU_FF">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPT_FF">PT_FF:</label>
                <input type="text" class="form-control" id="editPT_FF" name="editPT_FF">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPU_MO">PU_MO:</label>
                <input type="text" class="form-control" id="editPU_MO" name="editPU_MO">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPT_MO">PT_MO:</label>
                <input type="text" class="form-control" id="editPT_MO" name="editPT_MO">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPU_A">PU_A:</label>
                <input type="text" class="form-control" id="editPU_A" name="editPU_A">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPT_A">PT_A:</label>
                <input type="text" class="form-control" id="editPT_A" name="editPT_A">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editUrgence">Urgence:</label>
                <input type="text" class="form-control" id="editUrgence" name="editUrgence">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editdate">Date:</label>
                <input type="date" class="form-control" id="editdate" name="editdate">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="editPrix_Totale">Prix_Totale:</label>
                <input type="text" class="form-control" id="editPrix_Totale" name="editPrix_Totale">
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success">Insert Data</button>
        </div>
    </div>
</form>

                    </div>
                    </div>

                         <div class="card mb-4">
                                <div class="card-header"  style="100%" >
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body"   style="100%" >
                                <table id="metaliqueTable" style="100%"  class="display">
                                    <thead>
                                    <tr>
                                            <th>Design</th>
                                            <th>U</th>
                                            <th>Qté</th>
                                            <th>demandeur</th>
                                            <th>affectation</th>
                                            <th>observation</th>
                                            <th>PU_FF</th>
                                            <th>PT_FF</th>
                                            <th>PU_MO</th>
                                            <th>PT_MO</th>
                                            <th>PU_A</th>
                                            <th>PT_A</th>
                                            <th >Urgence</th>
                                            <th >Action_date</th>
                                            <th>Prix_Totale</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- You can dynamically fetch and display data from the database here -->
                                    </tbody>

                                    <tbody id="tableBody"></tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Design</th>
                                            <th>U</th>
                                            <th>Qté</th>
                                            <th>demandeur</th>
                                            <th>affectation</th>
                                            <th>observation</th>
                                            <th>PU_FF</th>
                                            <th>PT_FF</th>
                                            <th>PU_MO</th>
                                            <th>PT_MO</th>
                                            <th>PU_A</th>
                                            <th>PT_A</th>
                                            <th >Urgence</th>
                                            <th>Date</th>
                                            <th>Prix_TOTAL</th>
                                        </tr>
                                    </tfoot>
                                    
                                </table>
                           
                                <!-- DataTable initialization script -->
                                <script>

var id=  null;
    $(document).ready(function () {
    var table = $('#metaliqueTable').DataTable({
        "ajax": {
            "url": "../fetch_data_metalique.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "design" },
            { "data": "U" },
                { "data": "Qte" },
                { "data": "demandeur" },
                { "data": "affectation" },
                { "data": "observation" },
                { "data": "PU_FF" }  ,
                { "data": "PT_FF" },
                { "data": "PU_MO" },
                { "data": "PT_MO" },
                { "data": "PU_A" },
                { "data": "PT_A" },
                { "data": "Urgence" },
                { "data": "date" },
                { "data": "Prix_Totale" },
                {
                    data: null,
                    defaultContent: '<input type="radio" name="rowRadio">',
                    className: 'radio',
                    orderable: false
                }
            ],
            // "columnDefs": [
            //     {
            //         "targets": [0, 1, 2, 3, 4, 5, 6],
            //         "createdCell": function (td, cellData, rowData, row, col) {
            //             // For each cell, replace the content with an input field
            //             $(td).html('<input style="width:130px" type="text" value="' + cellData + '">');
            //         }
            //     }
            // ]
        });


        $('#editButton').on('click', function () {
            var selectedRow = $('input[name="rowRadio"]:checked');
            if (selectedRow.length > 0) {
                var data = table.row(selectedRow.closest('tr')).data();
                 id = data.id; // Assuming the column with the ID is named 'id'
                
                // Populate the modal with data
                $('#editModal #editedDesign').val(data.design);
                $('#editModal #editU').val(data.U);               
                 $('#editModal #editQtee').val(data.Qte);

                $('#editModal #editeddemandeur').val(data.demandeur);
                $('#editModal #id_cc').val(data.affectation);
                $('#editModal #editobservation').val(data.observation);
                $('#editModal #editPU_FF').val(data.PU_FF);
                 $('#editModal #editPT_FF').val(data.PT_FF);
                $('#editModal #editPU_MO').val(data.PU_MO);
                $('#editModal #editPT_MO').val(data.PT_MO);
                $('#editModal #editPU_A').val(data.PU_A);
                $('#editModal #editPT_A').val(data.PT_A);
                $('#editModal #editUrgence').val(data.Urgence);
                $('#editModal #editdate').val(data.date);
                $('#editModal #editPrix_Totale').val(data.Prix_Totale);

                // Open the modal
                $('#editModal').modal('show');

                // Save changes button click event
            
            } else {
                alert('Please select a row.');
            }
        });
    



        $('#saveChangesButton').on('click', function () {
                    // Collect data from the modal inputs

                    var updatedData = {
                        
                            'id': id,
                            'design': $('#editedDesignn').val(),
                            'U': $('#editUU').val(),
                            'Qte': $('#editQtee').val(),
                            'demandeur': $('#editeddemandeur').val(),
                            'affectation': $('#id_cTextt').val(),
                            'observation': $('#editobservationn').val(),
                            'PU_FF': $('#editPU_FFF').val(),
                            'PT_FF': $('#editPT_FFF').val(),
                            'PU_MO': $('#editPU_MOO').val(),
                            'PT_MO': $('#editPT_MOO').val(),
                            'PU_A': $('#editPU_AA').val(),
                            'PT_A': $('#editPT_AA').val(),
                            'Urgence': $('#editUrgencee').val(),
                            'Date': $('#editdatee').val(),
                            'Prix_TOTAL': $('#editPrix_Totalee').val(),
                        };

                    // Make an AJAX request to update_data.php

                    console.log(updatedData);
                    $.ajax({
                        type: 'POST',
                        url: 'update_metalique.php',
                        data: updatedData,
                        success: function (response) {
                            // Handle the response (e.g., close modal, update DataTable)
                            console.log(response);
                            $('#editModal').modal('hide');
                            table.ajax.reload(); // Reload DataTable

                        },
                        error: function (error) {
                            console.error('Error updating data:', error);
                        }
                    });
                });

        // Event listener for the Edit button outside of the DataTable
    });

    function closeModal() {
        $('#editModal').modal('hide');
    }
</script>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        var select = document.getElementById("id_cc");
        var hiddenInput = document.getElementById("id_cTextt");

        // Function to set the default option
        function setDefaultOption() {
            select.querySelector("option[value='']").selected = true;
            hiddenInput.value = ""; // Reset hidden input value
        }

        // Set the default option when the page loads
        setDefaultOption();

        // Event listener for the "edit" button click
        document.getElementById("editButton").addEventListener("click", function () {
            // Set the default option when the button is clicked
            setDefaultOption();
        });

        select.addEventListener("change", function () {
            var selectedOption = this.options[this.selectedIndex];
            hiddenInput.value = selectedOption.text;
        });
    });
</script>

<!-- Add the "Edit" button outside of the DataTable -->
<button id="editButton" class="btn btn-warning">Edit Selected Row</button>

<!-- Edit Modal -->
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Row</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" >
                    <!-- Input fields for each column -->
                 


                    <div class="form-group">
                                            <label for="editDesign">Design:</label>
                                            <input type="text" class="form-control" id="editedDesignn" name="editedDesign">
                                        </div>
 <div class="form-group">
                        <label for="edit">U:</label>
                        <input tpe="text" class="form-control" id="editUU" name="editU">
                    </div>
 <div class="form-group">
                        <label for="editQté">Qte:</label>
                        <input tpe="text" class="form-control" id="editQtee" name="editQtee">
                    </div>

 <div class="form-group">
                        <label for="editdemandeur">Demandeur:</label>
                        <input tpe="text" class="form-control" id="editeddemandeur" name="editeddemandeur">
                    </div>
                    <div class="form-group">
                        <label for="editDemandeur">Affectation:</label>
                        <select class="form-select form-select-lg mb-3"   id="id_cc" name="id_cc" required>
                                <?php
                                include 'config.php';


                                    $query = "SELECT * FROM chantier";
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='' disabled selected hidden>Choisir le chantier</option>";

                                            echo "<option value='" . $row['id_c'] . "'>" . $row['name'] . "</option>";
                                        }
                                    }
                                    else echo"noonononon";
                                    $conn->close();
                                ?>
                            </select>
                            <input type="hidden" name="id_cTextt" id="id_cTextt" value="">
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    var select = document.getElementById("id_cc");
                                    var hiddenInput = document.getElementById("id_cTextt");

                                    select.addEventListener("change", function () {
                                    var selectedOption = this.options[this.selectedIndex];
                                    hiddenInput.value = selectedOption.text;
                                    });
                                });
                                </script>
                    </div>
 <div class="form-group">
                        <label for="edit">observation:</label>
                        <input tpe="text" class="form-control" id="editobservationn" name="editobservation">
</div>
 <div class="form-group">
                        <label for="edit">PU_FF:</label>
                        <input tpe="text" class="form-control" id="editPU_FFF" name="editPU_FF">
                    </div>
 <div class="form-group">
                        <label for="edit">PT_FF:</label>
                        <input tpe="text" class="form-control" id="editPT_FFF" name="editPT_FF">
                    </div>
 <div class="form-group">
                        <label for="edit">PU_MO:</label>
                        <input tpe="text" class="form-control" id="editPU_MOO" name="editPU_MO">
                    </div>
 <div class="form-group">
                        <label for="edit">PT_MO:</label>
                        <input tpe="text" class="form-control" id="editPT_MOO" name="editPT_MO">
                    </div>
 <div class="form-group">
                        <label for="edit">PU_A:</label>
                        <input tpe="text" class="form-control" id="editPU_AA" name="editPU_A">
                    </div>
 <div class="form-group">
                        <label for="edit">PT_A:</label>
                        <input tpe="text" class="form-control" id="editPT_AA" name="editPT_A">
                    </div>
 <div class="form-group">
                        <label for="editUrgence">Urgence:</label>
                        <input tpe="text" class="form-control" id="editUrgencee" name="editUrgence">
                    </div>
 <div class="form-group">
                        <label for="editdata">date:</label>
                        <input type="date" class="form-control" id="editdatee" name="editdate">

                     
                    </div>
 <div class="form-group">
                        <label for="editdata.Prix">Prix_Totale:</label>
                        <input tpe="hidden" class="form-control" id="editPrix_Totalee" name="editPrix_Totale">
                    </div>






                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>

                <button type="button" class="btn btn-primary" id="saveChangesButton">Save changes</button>
            </div>
        </div>
    </div>
</div>




                                </div>
                                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
