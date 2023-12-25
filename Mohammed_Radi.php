<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Card Form</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
             margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #80ced6;
            background-image: url('bg.jpg') ;  
            background-size:  auto;
            height: 100vh;

         }

        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
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
        #x{
            width: 900px;
        }
        .modal {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }


        .modal-content {
        border-radius: 10px;
       /* Set the width of the modal content */
        margin: auto;
        width: 100%;
    }

    .modal-header {
        background-color: #4CAF50;
        color: #fff;
        border-radius: 10px 10px 0 0;
    }

    .modal-body,
    .modal-footer {
        padding: 20px;
    }

    .modal-footer button {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .modal-footer button:hover {
        background-color: #45a049;
    }



    .my-custom-modal  .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
        width: 80%;
        max-width: 100%;
    }
    #myModal2 .table td,
#myModal2 .table th {
    padding: 0 !important;
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
       <input type="hidden" id="id_e" value='4'>
        <div class="container mt-5">
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter Préstation</button>
    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal2" style="float: right;" onclick="openMontantModal()">Modifier Préstation</button>

    <!-- Modal -->
    <div class="modal my-custom-modal" id="myModal" >
        <div class="modal-dialog" >
            <div class="modal-content" >

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Prestation Métallique  </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table border="1">
    <thead>
        <tr>
            <th>Design</th>
            <th>U</th>
            <th>Qte</th>
            <th>Demandeur</th>
            <th>Affectation</th>
            <th>Observation</th>
            <th>PU_FF</th>
            <th>PT_FF</th>
            <th>PU_MO</th>
            <th>PT_MO</th>
            <th>PU_A</th>
            <th>PT_A</th>
            <th>Urgence</th>
            <th>Date</th>

        </tr>
    </thead>
    <tbody id="data-table-body">
        <!-- The first row without pre-filled values -->
        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <td><input type="date"></td>
        </tr>
    </tbody>
</table>



                <!-- Modal Footer -->
                <div class="modal-footer">
                        <button onclick="addRow()">Add Row</button>
                        <button onclick="removeLastRow()">Remove Last Row</button>
                        <button onclick="insertData()">Insert Data</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal2">
    <div class="modal-dialog" style="max-width: 98%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Prestation Métallique </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
    <table class="table" border="1">
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
                <th>Date</th>
                <th>Prix_TOTAL</th>
                <th>save</th>

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

   


    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
   
   function openMontantModal(mois, annee, id_e, id_c) {
    var mois = document.getElementById('month').value;
    var annee = document.getElementById('year').value;
    var id_e = document.getElementById('id_e').value;
    var id_c = document.getElementById('chantier').value;

    // Use AJAX to fetch data based on the selected filter criteria
    $.ajax({
        type: 'POST',
        url: 'fetch_data_metalique.php',
        data: { mois: mois, annee: annee, id_e: id_e, id_c: id_c },
   
            success: function(data) {
    // Append the table HTML to the tableBody container
    $('#tableBody').html(data);

    // Display the second modal
    $('#myModal2').modal('show');
}
        
    });}

//     function openMontantModal2(mois, annee, id_e, id_c) {
//     var mois = document.getElementById('month').value;
//     var annee = document.getElementById('year').value;
//     var id_e = document.getElementById('id_e').value;
//     var id_c = document.getElementById('chantier').value;

//     // Use AJAX to fetch data based on the selected filter criteria
//     $.ajax({
//         type: 'POST',
//         url: 'fetch_data2.php',
//         data: { mois: mois, annee: annee, id_e: id_e, id_c: id_c },
   
//             success: function(data) {
//     // Append the table HTML to the tableBody container
//     $('#tableBody2').html(data);

//     // Display the second modal
//     $('#myModal3').modal('show');
// }
        
//     });}

 

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

<script>
function addRow() {
    var tableBody = document.getElementById('data-table-body');
    var newRow = tableBody.insertRow(tableBody.rows.length);

    for (var i = 0; i < 14; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement('input');

        // Set name attribute for input elements
        input.name = 'row[]';

        // For Urgence column, create a select element
        if (i === 12) {
            input = document.createElement('select');
            input.name = 'row[]';
            var option1 = document.createElement('option');
            option1.value = '1';
            option1.text = '1';
            input.add(option1);

            var option2 = document.createElement('option');
            option2.value = '2';
            option2.text = '2';
            input.add(option2);

            var option3 = document.createElement('option');
            option3.value = '3';
            option3.text = '3';
            input.add(option3);

            var option4 = document.createElement('option');
            option4.value = '4';
            option4.text = '4';
            input.add(option4);
        }

        // For Date column, create an input with type date
        if (i === 13) {
            input = document.createElement('input');
            input.type = 'date';
            input.name = 'row[]';
        }

        cell.appendChild(input);
    }
}


function removeLastRow() {
    var tableBody = document.getElementById('data-table-body');
    if (tableBody.rows.length > 1) {
        tableBody.deleteRow(tableBody.rows.length - 1);
    }
}

function insertData() {
    // JavaScript code to send data to PHP script for insertion
    var tableRows = document.querySelectorAll('#data-table-body tr');
    var data = [];
    var ch = document.getElementById('chantier').value;
    console.log(ch)
    tableRows.forEach(row => {
        var rowData = [];
        var inputs = row.querySelectorAll('input, select');

        inputs.forEach(input => {
            rowData.push(input.value);
        });

        data.push(rowData);
    });

    // Send data to PHP script using fetch API
    fetch('insert_data.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'data=' + encodeURIComponent(JSON.stringify(data))+ '&ch=' + encodeURIComponent(ch), // Encode the data properly
    })
    .then(response => response.text()) // Expecting text response
    .then(data => {
        alert(data); // Display the response from the server
        // Optionally, you can perform additional actions after successful insertion
    })
    .catch(error => {
        console.error('Error:', error);
    });
    console.log(data)
}

function saveEdit(id) {
    // Get the modified values from the input fields
    var editedDesign = $('#edit_design_' + id).val();
    var editedU = $('#edit_U_' + id).val();
    var editedQte = $('#edit_Qte_' + id).val();
    var editedDemandeur = $('#edit_demandeur_' + id).val();
    var editedAffectation = $('#edit_affectation_' + id).val();
    var editedObservation = $('#edit_observation_' + id).val();
    var editedPU_FF = $('#edit_PU_FF_' + id).val();
    var editedPT_FF = $('#edit_PT_FF_' + id).val();
    var editedPU_MO = $('#edit_PU_MO_' + id).val();
    var editedPT_MO = $('#edit_PT_MO_' + id).val();
    var editedPU_A = $('#edit_PU_A_' + id).val();
    var editedPT_A = $('#edit_PT_A_' + id).val();
    var editedUrgence = $('#edit_Urgence_' + id).val();
    var editedDate = $('#edit_date_' + id).val();
 
    // Make an AJAX request to update the record in the database
    $.ajax({
        type: 'POST',
        url: 'update_record_metalique.php', // Change this to the path of your PHP script for updating records
        data: {
            id: id,
            editedDesign: editedDesign,
            editedU: editedU,
            editedQte: editedQte,
            editedDemandeur: editedDemandeur,
            editedAffectation: editedAffectation,
            editedObservation: editedObservation,
            editedPU_FF: editedPU_FF,
            editedPT_FF: editedPT_FF,
            editedPU_MO: editedPU_MO,
            editedPT_MO: editedPT_MO,
            editedPU_A: editedPU_A,
            editedPT_A: editedPT_A,
            editedUrgence: editedUrgence,
            editedDate: editedDate,
         },
        success: function(response) {
            console.log(response); // Log the response from the server
            alert('updated successfully!')
            // Optionally, update the table or provide feedback to the user
        },
        error: function(error) {
            console.error('Error:', error);
        }
 
    });
}




</script>


</body>
</html>
