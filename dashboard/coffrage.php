<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                        <h1 class="mt-4">Coffrage</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Coffrage</li>
                        </ol>
                        <div  class="card mb-4">
                            <div style="display:flex" class="card-body">
                                <select class="form-select form-select-lg mb-3" style="width:18%" id="month" name="month" required  >
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
                                
                                 <pre>  </pre>                   

                                <select class="form-select form-select-lg mb-3" style="width:10%" id="year" name="year" required>
                                            <?php
                                                for ($i = date('Y'); $i >= 2020;) {
                                                    echo "<option value='$i'>$i</option>";
                                                    $i--;
                                                }
                                            ?>
                                </select>
                                <pre>  </pre>
                                <select class="form-select form-select-lg mb-3" style="width:20%"  id="id_c" name="id_c" required>
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
                            <pre>  </pre>
                            <button class="btn btn-primary"  style="height:47px" type="button" onclick="tableClick()"><i class="fas fa-search"></i></button>
      
                        </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table    id="tab" class="display">
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
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="tableBody"></tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Chantier</th>
                                            <th>Date</th>
                                            <th>Design</th>
                                            <th>U</th>
                                            <th>Qte</th>
                                            <th>PU</th>
                                            <th>NJ</th>
                                            <th>Montant</th>
                                            
                                        </tr>
                                    </tfoot>
                                    
                                </table>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
       
        <script src="js/datatables-simple-demo.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>



 
            



            <script>
    
            $(document).ready(function () {
    var table = $('#tab').DataTable({})});

    function tableClick() {
            // Validate that all selects are chosen
            var monthValue = $('#month').val();
            var yearValue = $('#year').val();
            var idCValue = $('#id_c').val();

            if (monthValue && yearValue && idCValue) {
                // All selects are chosen, proceed with your logic
                table();
            } else {
                // Display an alert or message indicating that all selects must be chosen
                alert('Please select values for all dropdowns before clicking the button.');
            }
        }

            function table(mois, annee, id_c) {
    var mois = document.getElementById('month').value;
    var annee = document.getElementById('year').value;
    var id_c = document.getElementById('id_c').value;


    $('#tab').DataTable().destroy();

    // Use AJAX to fetch data based on the selected filter criteria
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'fetch_data_c.php',
        data: { mois: mois, annee: annee, id_c: id_c },

        success: function(data) {
  

            
  
console.log( $('body').find('#tab').html());

var table = $('#tab').DataTable({
                 
                    data: data,
                    columns: [
                        { "data": "chantier" },
                        { "data": "date" },
                { "data": "design" },
                { "data": "U" },
                { "data": "Qte" },
                { "data": "PU" },
                { "data": "NJ" },
                { "data": "montant" },
                    ]
                });
                
            },
            error: function(error) {
                console.log('Error fetching data: ', error);
            }
        });
    }
       
        </script>
    </body>
</html>
