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

        form {
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
</head>
<body>
    <form   method="post">
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
        <select id="month" name="month" required>
            <?php 
                echo "<option value='' disabled selected hidden>Choose the month</option>";
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>" . date('F', mktime(0, 0, 0, $i, 1)) . "</option>";
                }
            ?>
        </select>

        <label for="year">Year:</label>
        <select id="year" name="year" required>
            <?php
                for ($i = date('Y'); $i >= 2020; $i--) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
</select>
        <label for="text1">Location de Matériel Roulant </label>
        <input type="text"  id="text1" name="text1" placeholder='Location de Matériel Roulant'   required>

        <label for="text2">Loation Parc Auto</label>
        <input type="text" id="text2" name="text2" placeholder='Loation Parc Auto'    required>

        <label for="text3">Gasoil</label>
        <input type="text" id="text3" name="text3" placeholder='Gasoil'    required>

        <label for="text4">Assurance</label>
        <input type="text" id="text4" name="text4" placeholder='Assurance'     required>

     
        </select>



        <input type="submit" value="Submit">

        <?php
              include 'config.php';
              // Assuming you have received the value from the form
                $inputValue1 = isset($_POST['text1']);
                $inputValue2 = isset($_POST['text2']);
                $inputValue3 = isset($_POST['text3']);
                $inputValue4 = isset($_POST['text4']);
                $selectedchantier = isset($_POST['chantier']);
                $selectedmonth = isset($_POST['month']);
                $selectedyear = isset($_POST['year']);
                if ($selectedchantier  && $selectedmonth && $selectedyear){
                
                
                    $inputValue1 =  $_POST['text1'] ;
                    $inputValue2 =  $_POST['text2'];
                    $inputValue3 =  $_POST['text3'];
                    $inputValue4 =  $_POST['text4'];
                    $selectedchantier =  $_POST['chantier'];
                    $selectedmonth =  $_POST['month'];
                    $selectedyear =  $_POST['year'];
                
                    // Assuming you have a table named 'your_table' with columns 'value' and 'text'
                $sql = "INSERT INTO montant (id_e,id_c,Montant,mois,année) VALUES 
                ('5','$selectedchantier', '$inputValue1','$selectedmonth','$selectedyear'),
                ('11', '$selectedchantier','$inputValue2','$selectedmonth','$selectedyear'),
                ('12', '$selectedchantier','$inputValue3','$selectedmonth','$selectedyear'),
                ('13', '$selectedchantier','$inputValue4','$selectedmonth','$selectedyear')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record inserted successfully";
                } 
                
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }}

                $conn->close();
                ?>
    </form>
</body>
</html>
