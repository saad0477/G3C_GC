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

        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

         <!-- Include DataTables CSS and JS files -->    
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
 

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

 

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    </head>
   
 
<?php
// Include the database configuration
include('config.php');

// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Insert data into TransportTable (modify with your actual data)
    $chantier = $_POST['id_cText'];
    $design = $_POST['design'];
    $date = $_POST['date'];
    $U = $_POST['U'];
    $Qte = $_POST['Qte'];
    $PU = $_POST['PU'];
    $NJ = $_POST['NJ'];
    $id_c= $_POST['id_c'];

    $sql = "INSERT INTO coffrage (chantier,date,design, U, Qte, PU,NJ,id_c)
            VALUES ('$chantier','$date','$design', '$U', '$Qte', '$PU', '$NJ','$id_c')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Reload DataTable after successful form submission
    echo "<script>$('#transportTable').DataTable().ajax.reload();</script>";
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
                    <h1 class="mt-4">Coffrage</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Coffrage</li>
                        </ol>
</div>
                    <div class="card mb-4"  style="width:80%; padding-left:10px">
                            <div class="card-body">              
                                <!-- HTML form for data input -->
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="date">Date:</label>
                                            <input type="date" class="form-control" name="date" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="demandeur">Chantier:</label>
                                            <select class="form-select form-select-lg mb-3"   id="id_c" name="id_c" required>
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
                                        <div class="col-md-2 mb-3">
                                            <label for="design">Design:</label>
                                            <input type="text" class="form-control" name="design" placeholder="design" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="U">U:</label>
                                            <input type="text" class="form-control" name="U" placeholder="U" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="Qte">Qte:</label>
                                            <input type="text" class="form-control" name="Qte" placeholder="Qte" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="PU">PU:</label>
                                            <input type="text" class="form-control" name="PU" placeholder="PU" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="NJ">NJ:</label>
                                            <input type="text" class="form-control" name="NJ" placeholder="NJ" required>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-success">Insert Data</button>
                                </form>
                            </div>
                        </div>


                         <div class="card mb-4">
                                <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="transportTable" style="width:100%"  class="display">
                                    <thead>
                                        <tr>
                                            <th>Chantier</th>
                                            <th>Date</th>
                                            <th>Design</th>
                                            <th>U</th>
                                            <th>Qte</th>
                                            <th>PU</th>
                                            <th>NJ</th>
                                            <th>Montant</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- You can dynamically fetch and display data from the database here -->
                                    </tbody>
                                </table>

                                <!-- DataTable initialization script -->
                                <script>

var id=null;

    $(document).ready(function () {
        var table = $('#transportTable').DataTable({
            "ajax": {
                "url": "fetch_data_coffrage.php",
                "dataSrc": ""
            },
            "columns": [
                { "data": "chantier" },
                { "data": "date" },
                { "data": "design" },
                { "data": "U" },
                { "data": "Qte" },
                { "data": "PU" },
                { "data": "NJ" },
                { "data": "montant" },
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

        // Event listener for the Edit button outside of the DataTable
        $('#editButton').on('click', function () {
            var selectedRow = $('input[name="rowRadio"]:checked');
            if (selectedRow.length > 0) {
                var data = table.row(selectedRow.closest('tr')).data();
                 id = data.id; // Assuming the column with the ID is named 'id'
                
                // Populate the modal with data
                $('#editModal #id_cTextt').val(data.chantier);
                $('#editModal #editDate').val(data.date);
                $('#editModal #editdesign').val(data.design);
                $('#editModal #editU').val(data.U);
                $('#editModal #editQte').val(data.Qte);
                $('#editModal #editPU').val(data.PU);
                $('#editModal #editNJ').val(data.NJ);
                $('#editModal #editmontant').val(data.montant);

                // Open the modal
                $('#editModal').modal('show');

                // Save changes button click event
                $('#saveChangesButton').on('click', function () {
                    // Collect data from the modal inputs
                    var updatedData = {
                        'id': id,
                        'chantier': $('#id_cTextt').val(),
                        'date': $('#editDate').val(),
                        'design': $('#editdesign').val(),
                        'U': $('#editU').val(),
                        'Qte': $('#editQte').val(),
                        'PU': $('#editPU').val(),
                        'NJ': $('#editNJ').val(),
                        'montant': $('#editmontant').val(),
                        'id_c': $('#id_cc').val()

                    };

                    // Make an AJAX request to update_data.php
                    $.ajax({
                        type: 'POST',
                        url: 'update_coffrage.php',
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
            } else {
                alert('Please select a row.');
            }
        });
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
                <form id="editForm">
                    <!-- Input fields for each column -->
                    <div class="form-group">
                        <label for="editDate">Date:</label>
                        <input type="date" class="form-control" id="editDate" name="editDate">
                    </div>
                    <div class="form-group">
                        <label for="editDemandeur">Chantier:</label>
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
                        <label for="editdesign">design:</label>
                        <input type="text" class="form-control" id="editdesign" name="editdesign">
                    </div>

                    <div class="form-group">
                        <label for="editU">U:</label>
                        <input type="text" class="form-control" id="editU" name="editU">
                    </div>

                    <div class="form-group">
                        <label for="editQte">Qte:</label>
                        <input type="text" class="form-control" id="editQte" name="editQte">
                    </div>

                    <div class="form-group">
                        <label for="editPU">PU:</label>
                        <input type="text" class="form-control" id="editPU" name="editPU">
                    </div>

                    <div class="form-group">
                        <label for="editNJ">NJ:</label>
                        <input type="text" class="form-control" id="editNJ" name="editNJ">
                    </div>

                    <div class="form-group">
                        <label for="editmontant">montant:</label>
                        <input type="text" class="form-control" id="editmontant" name="editmontant">
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
