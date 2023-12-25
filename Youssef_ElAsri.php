<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>


 
.modal-dialog {
    max-width: 70% !important;
    margin-right: auto;
    margin-left: auto;
}
/* 

.form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
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
                            <a class="nav-link" href="index.php">
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
                                    <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
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
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
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
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div  class="card mb-4">
                            <div style="display:flex" class="card-body">
                            <div class="form">
         <h1>Model Card</h1>
        <label for="chantier">Chantier:</label>
        <select  class="form-select form-select-lg mb-3" id="chantier" name="chantier" required>
            <?php
              include 'config.php';


                $query = "SELECT * FROM chantier";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_c'] . "'>" . $row['name'] . "</option>";
                    }
                }
                else echo"noonononon";
                $conn->close();
            ?>
        </select>
        <label for="month">Month:</label>
        <select id="month"  class="form-select form-select-lg mb-3"   name="month" required  >
        <?php 
        echo "<option value='' disabled selected hidden>Choisir le mois</option>";

        $monthNames = [
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre',
        ];

        foreach ($monthNames as $number => $name) {
            echo "<option value='$number'>$name</option>";
        }
    ?>
        </select>

        <label for="year">Year:</label>
        <select id="year"  class="form-select form-select-lg mb-3" name="year" required>
            <?php
                for ($i = date('Y'); $i >= 2020;) {
                    echo "<option value='$i'>$i</option>";
                    $i--;
                }
            ?>
</select>
       <input type="hidden" id="id_e" value='3'>
        <div class="container mt-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter Préstation</button>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="openMontantModal()">Modifier Préstation</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal3" onclick="openMontantModal2()">Valider Préstation</button>

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" >

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Prêt de MO </h4>
                    <!-- <button type="button" class="close" onclick="closeModal()" data-dismiss="modal">&times;</button> -->
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div id="modalContent">
                        <p style="color: red">le montant va avoir une augmentation de 30%:</p>
                        <div class="form-group" style="display:flex;">
                            <label for="text1">préstation1:</label>
                            <input type="text" class="form-control" id="préstation1" required>
                            <label for="text2">Montant1:</label>
                            <input type="text" class="form-control" id="Montant1" required>
                        </div>
                      <br>
                        <div id="dynamicFields"></div>
                        <button class="btn btn-primary" onclick="addTextField()">Add Text Field</button>
                        <button class="btn btn-danger" onclick="removeLastTextField()">Remove Last Field</button>

                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="submitForm()">Submit</button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Prêt de MO</h4>
                <!-- <button type="button" class="close"  onclick="closeModal()">&times;</button> -->
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
    <table class="table" style="width: auto">
        <thead>
            <tr>
                <th>Mois</th>
                <th>Année</th>
                <th>Préstation</th>
                <th>Montant</th>
                <th>Enregister</th>

            </tr>
        </thead>
        <tbody id="tableBody"></tbody>
    </table>
    <!-- Add this input field inside your first modal -->
<input type="hidden" id="editedRowId" value="">

</div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-success" onclick="submitForm()">Submit</button> -->
                <!-- <button type="button" class="btn btn-secondary"   onclick="closeModal()">Close</button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Prêt de MO</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button> -->
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
    <table class="table">
        <thead>
            <tr>
                <th>Mois</th>
                <th>Année</th>
                <th>Préstation</th>
                <th>Montant</th>
 
            </tr>
        </thead>
        <tbody id="tableBody2"></tbody>
    </table>
    <!-- Add this input field inside your first modal -->
<input type="hidden" id="editedRowId" value="">

</div>
            <!-- Modal Footer -->
           

        </div>
    </div>
</div>

            </div>
                        </div>
                        </div>
                        <!-- <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table    id="tab" class="display">
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
                                            <th>Prix_TOTAL</th>
                                        </tr>
                                    </thead>
                                    
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
                            </div>
                        </div> -->
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
        <script src="dashboard/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
       
        <script src="dashboard/js/datatables-simple-demo.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>



 
            



            <script>
    
    //         $(document).ready(function () {
    // var table = $('#tab').DataTable({})});

    // function tableClick() {
    //         // Validate that all selects are chosen
    //         var monthValue = $('#month').val();
    //         var yearValue = $('#year').val();
    //         var idCValue = $('#id_c').val();

    //         if (monthValue && yearValue && idCValue) {
    //             // All selects are chosen, proceed with your logic
    //             table();
    //         } else {
    //             // Display an alert or message indicating that all selects must be chosen
    //             alert('Please select values for all dropdowns before clicking the button.');
    //         }
    //     }

            function table(mois, annee, id_c) {
    var mois = document.getElementById('month').value;
    var annee = document.getElementById('year').value;
    var id_c = document.getElementById('id_c').value;


    $('#tab').DataTable().destroy();

    // Use AJAX to fetch data based on the selected filter criteria
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'fetch_data_m.php',
        data: { mois: mois, annee: annee, id_c: id_c },

        success: function(data) {
  

            
  
console.log( $('body').find('.datatablesSimpleo').html());

var table = $('#tab').DataTable({
                 
                    data: data,
                    columns: [
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
                { "data": "Prix_Totale" }
                    ]
                });
                
            },
            error: function(error) {
                console.log('Error fetching data: ', error);
            }
        });
    }
       
        </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 
<script>
    var fieldCounter = 2; // Start with 2 initial text fields

    function addTextField() {
        // Add a new text field on "Add Text Field" button click
        var dynamicFields = document.getElementById('dynamicFields');
        var newField = document.createElement('div');
        newField.innerHTML = '<div class="form-group"  style="display:flex;"> <label for="text' + fieldCounter + '">préstation' + fieldCounter + ':</label><input type="text" class="form-control" id="préstation' + fieldCounter + '" required>  <label for="text'+fieldCounter + '">Montant'+fieldCounter + ':</label><input type="text" class="form-control" id="Montant' + fieldCounter + '" required></div>';
                           
                              
        dynamicFields.appendChild(newField);
        fieldCounter++;
    }
    function removeLastTextField() {
    var dynamicFields = document.getElementById('dynamicFields');
    var lastField = dynamicFields.lastElementChild;

    // Vérifier s'il y a des éléments à supprimer
    if (lastField) {
        dynamicFields.removeChild(lastField);
        fieldCounter--;
    }
}

function submitForm() {
    // Collect form data
    var formData = {};
    for (var i = 1; i <= fieldCounter; i++) {
        var préstationField = document.getElementById('préstation' + i);
        var MontantField = document.getElementById('Montant' + i);

        // Check if both fields exist before adding them to formData
        if (préstationField && MontantField) {
            // Calculate 30% more and add it to formData
            var originalAmount = parseFloat(MontantField.value);
            var increasedAmount = originalAmount + (originalAmount * 0.3);

            formData['entry' + i] = {
                'préstation': préstationField.value,
                'Montant': increasedAmount.toFixed(2) // Fix to 2 decimal places
            };
            console.log(increasedAmount);
        }
    }

    var additionalData = {
        id_e: $('#id_e').val(),
        chantier: $('#chantier').val(),
        month: $('#month').val(),
        year: $('#year').val()
    };

    var allData = Object.assign({}, formData, additionalData);

    // Make an AJAX request to the PHP script
    jQuery.ajax({
        type: 'POST',
        url: 'process.php', // Change this to the path of your PHP script
        data: allData,
        success: function (response) {
            console.log(response); // Log the response from the server
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });

    // Close the modal after submission
    $('#myModal').modal('hide');
}




 
    function openMontantModal(mois, annee, id_e, id_c) {
    var mois = document.getElementById('month').value;
    var annee = document.getElementById('year').value;
    var id_e = document.getElementById('id_e').value;
    var id_c = document.getElementById('chantier').value;

    // Use AJAX to fetch data based on the selected filter criteria
    $.ajax({
        type: 'POST',
        url: 'fetch_data.php',
        data: { mois: mois, annee: annee, id_e: id_e, id_c: id_c },
   
            success: function(data) {
    // Append the table HTML to the tableBody container
    $('#tableBody').html(data);

    // Display the second modal
    $('#myModal2').modal('show');
}
        
    });}


    function openMontantModal2(mois, annee, id_e, id_c) {
    var mois = document.getElementById('month').value;
    var annee = document.getElementById('year').value;
    var id_e = document.getElementById('id_e').value;
    var id_c = document.getElementById('chantier').value;

    // Use AJAX to fetch data based on the selected filter criteria
    $.ajax({
        type: 'POST',
        url: 'fetch_data2.php',
        data: { mois: mois, annee: annee, id_e: id_e, id_c: id_c },
   
            success: function(data) {
    // Append the table HTML to the tableBody container
    $('#tableBody2').html(data);

    // Display the second modal
    $('#myModal3').modal('show');
}
        
    });}


    function saveEdit(id) {
        // Get the modified values from the input fields
        var editedMois = $('#edit_mois_' + id).val();
        var editedAnnee = $('#edit_annee_' + id).val();
        var editedPrestation = $('#edit_prestation_' + id).val();
        var editedMontant = $('#edit_montant_' + id).val();

        // Make an AJAX request to update the record in the database
        $.ajax({
            type: 'POST',
            url: 'update_record.php', // Change this to the path of your PHP script for updating records
            data: {
                id: id,
                editedMois: editedMois,
                editedAnnee: editedAnnee,
                editedPrestation: editedPrestation,
                editedMontant: editedMontant
            },
            success: function(response) {
                console.log(response); // Log the response from the server

                // Optionally, update the table or provide feedback to the user
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }

    function valider() {
        // Get the modified values from the input fields
        var moisv = $('#moisv').val();
        var anneev = $('#anneev').val();
        var chantierv = $('#chantierv').val();

        // Make an AJAX request to update the record in the database
        $.ajax({
            type: 'POST',
            url: 'validate_prestation.php', // Change this to the path of your PHP script for updating records
            data: {
                moisv: moisv,
                anneev: anneev,
                chantierv: chantierv
            },
            success: function(response) {
                console.log(response); // Log the response from the server

                // Optionally, update the table or provide feedback to the user
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
        $('#myModal3').modal('hide');

    }


    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
        var modal1 = document.getElementById('myModal2');
        modal1.style.display = 'none';
        var modal2 = document.getElementById('myModal3');
        modal2.style.display = 'none';
        $('#myModal3').modal('hide');
        console.log('hhh');
        
        }
</script>
    </body>
</html>
