<?php
session_start();
$user_email = $_SESSION['user_email'];

// Check if the user is authenticated, redirect to login if not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true || $user_email !== 'user1@example.com') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Card Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: block;
            justify-content: center;
            align-items: center;
         }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            left: 25%;
            right: 25%;
            top : 10%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            border-collapse: collapse;
            width: 900px;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
            height: 50px;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 17px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Optional: Add some style for a cleaner design */
        nav a.active {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            color: #4caf50;
        }

        p {
            margin-top: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }


        .dropdown {
    float: left;
    overflow: hidden;
    margin: 0; /* Set margin to 0 */

}
/* ... Votre CSS existant ... */

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    text-align: center;
    padding: 17px 16px;

    outline: none;
    color: white;
    background-color: #333;
    font-family: inherit;
    margin: 0;
    transition: background-color 0.3s, color 0.3s;
}

.dropdown .dropbtn:hover {
    background-color: #ddd; /* Couleur de survol */
    color: black; /* Couleur de survol du texte */
}

/* ... Votre CSS existant ... */

.dropdown-content {
    max-height: 0;
    overflow: hidden;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    margin: 0;
    padding: 0;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    transition: max-height 0.5s ease-out;

}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
    max-height: 200px; /* Adjust the value according to your content */

}


@media only screen and (max-width: 600px) {
    nav {
        display: none; /* Masquer la barre de navigation sur les petits écrans */
    }}
    </style>
</head>
<nav>
    <a href="Aicha_chitt_home.php" class="active">Accueil</a>
    <a href="Aicha_Chitt_view.php">Details</a>
    <a href="Aicha_Chitt.php">Générer Facture</a>


    <a href="logout.php">Logout</a>
</nav>
<body>
    <form   id="pdfForm" action="generate_pdf.php" method="post" target="_blank">
        <h1>Model Card</h1>
        <label for="chantier">Chantier:</label>
        <select id="chantierr" name="chantierr[]" required   multiple>
            <?php
              echo "<option value='' disabled selected hidden>Choisir le chantier</option>";
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
        <select id="month" name="month" required  >
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
        <select id="year" name="year" required  >
            <?php
              echo "<option value='' disabled selected hidden>Choisir l'année</option>";
                for ($i = date('Y'); $i >= 2020;) {
                    echo "<option value='$i'>$i</option>";
                    $i--;
                }
            ?>
        </select>
        <!-- <label for="text1">Prêt de MO</label>
        <input type="text"  name="text1" placeholder='Prêt de MO'   required>

  -->
  <div id="resultTable"></div>
  <input type="hidden" name="chantier" id="hiddenChantier">
    <input type="hidden" name="monthh" id="hiddenMonth">
    <input type="hidden" name="yearr" id="hiddenYear">
    <input type="text" name="num_facture" placeholder="N° Facture">

  <button type="button" onclick="generatePDF()">Generate PDF</button>
 
    </form>

    <script>
   

 

        function generatePDF() {
                // Get the selected values from the dropdowns
                var selectedChantier = document.getElementById("chantierr").value;
                var selectedMonth = document.getElementById("month").value;
                var selectedYear = document.getElementById("year").value;

                // Set the hidden input values
                document.getElementById("hiddenChantier").value = selectedChantier;
                document.getElementById("hiddenMonth").value = selectedMonth;
                document.getElementById("hiddenYear").value = selectedYear;

                // Submit the form
                document.getElementById("pdfForm").submit();
            }  
 
        </script>

 
</body>
</html>
