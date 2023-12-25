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
            display: flex;
            justify-content: center;
            align-items: center;
         }

        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="form">
         <h1>Model Card</h1>
        <label for="chantier">Chantier:</label>
        <select id="chantier" name="chantier" required>
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
        <select id="year" name="year" required>
            <?php
                for ($i = date('Y'); $i >= 2020;) {
                    echo "<option value='$i'>$i</option>";
                    $i--;
                }
            ?>
</select>
       <input type="hidden" id="id_e" value='6'>
        <div class="container mt-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter Préstation</button>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="openMontantModal()">Modifier Préstation</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal3" onclick="openMontantModal2()">Valider Préstation</button>

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Location de Grues </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div id="modalContent">
                        <div class="form-group" style="display:flex;">
                            <label for="text1">préstation1:</label>
                            <input type="text" class="form-control" id="préstation1" required>
                            <label for="text2">Montant1:</label>
                            <input type="text" class="form-control" id="Montant1" required>
                        </div>
                      
                        <div id="dynamicFields"></div>
                        <button class="btn btn-primary" onclick="addTextField()">Add Text Field</button>
                        <button class="btn btn-danger" onclick="removeLastTextField()">Remove Last Field</button>

                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="submitForm()">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                <h4 class="modal-title">Location de Grues</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<div class="modal" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Location de Grues</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
   


    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            formData['entry' + i] = {
                'préstation': préstationField.value,
                'Montant': MontantField.value
            };
        }
    }
    var additionalData = {
    id_e: $('#id_e').val(),
    chantier: $('#chantier').val(),
    month: $('#month').val(),
    year: $('#year').val()
};

var allData = Object.assign({}, formData, additionalData,id_e);


        // Make an AJAX request to the PHP script
        jQuery.ajax({

            type: 'POST',
            url: 'process.php', // Change this to the path of your PHP script
            data: allData,
            success: function(response) {
                console.log(response); // Log the response from the server
            },
            error: function(error) {
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
</script>
</body>
</html>
