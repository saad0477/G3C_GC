<?php
session_start();
$user_email = $_SESSION['user_email'];

// Check if the user is authenticated, redirect to login if not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true || $user_email !== 'a.chitt@g3c.ma') {
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
            background-color: white;
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
            width: 100px;
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
        table {
            border-collapse: collapse;
            width:100%;
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
        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .bottom-div {
            /* background-color: #f0f0f0; */
            padding: 10px;
            text-align: center;
        }
        .content {
            flex: 1;
            /* Add any other styles you need for the content */
        }
    </style>
<?php
// Include your database connection configuration
include 'config.php';

// Get the selected Chantier from the AJAX request
 
$chantier = $_POST['chantierr'];
$year =  $_POST['yearr'];
$month =  $_POST['monthh'];
 $chantier_ids_string = implode(",", $chantier);
if($chantier_ids_string  && $year && $month){
 $fixe=4000.00;
// SQL query
$sql = "SELECT
            CASE
            WHEN e.id_d = 2 THEN e.name -- Display elements when id_d is 2
            ELSE d.name -- Display designation for other id_d values
            END AS designation_or_element,
            SUM(m.Montant) AS totalMontant
            FROM
            element e
            INNER JOIN
            montant m ON e.id_e = m.id_e
            LEFT JOIN
            designation d ON e.id_d = d.id_d
            WHERE
            m.mois = $month AND m.année = $year AND m.id_c IN ( $chantier_ids_string )

            GROUP BY
            designation_or_element;";

$result = $conn->query($sql);

$query="SELECT
SUM(Montant) AS totalMontant
FROM
montant
WHERE
mois = $month AND année = $year AND  id_c IN ( $chantier_ids_string )";
$result1 = $conn->query($query);
$row1 = $result1->fetch_assoc();
 
$sum = bcadd($row1['totalMontant'], $fixe, 2);

$TVA =   ($sum * 0.2);
$TVA = bcadd($TVA,0.00, 2);
$fix = bcadd(0.00, $fixe, 2);
$TVA1 = $sum + ($sum * 0.2);
$TVA1 = bcadd($TVA1,0.00, 2);
if ($result->num_rows > 0) {
 
    echo "<table  >
            <tr style='border-bottom: 1px solid black;'>
                <th style=' width: 50%; border: 2px solid black; padding: 8px;'>Designation</th>
                <th style='border: 2px solid black; padding: 8px;'>Qté</th>
                <th style='border: 2px solid black; padding: 8px;'>Unité</th>
                <th style='border: 2px solid black; padding: 8px;'>P.U</th>
                <th style='border: 2px solid black; padding: 8px;'>Total HT</th>
            </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr style=' border-bottom: 0px solid black;'>
            <td style=' width: 50%;border-right: 2px solid black; border-left: 2px solid black; padding: 8px; height: 15px; text-decoration: underline; '>{$row['designation_or_element']}</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>Sit</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>1</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>{$row['totalMontant']}</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px; '>{$row['totalMontant']}</td>
        </tr>";
}
echo "<tr style=' border-bottom: 0px solid black;'>
            <td style=' width: 50%;border-right: 2px solid black; padding: 8px; border-left: 2px solid black; height: 15px; text-decoration: underline; '>Prestation de service Administrative et Comptabilité</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>F</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>1</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>$fix</td>
            <td style='border-right: 2px solid black; padding: 8px; height: 15px;'>$fix</td>
        </tr>";

        echo "<tr style=' border-top: 2px solid black;' >
            <td   style='border-style: none'></td>
            <td  colspan='3' style=' border-top: 2px solid black; border-left: 2px solid black; background-color: #f2f2f2;'>Total HT</td>
            <td style=' border-left: 2px solid black; border-right: 2px solid black;'>$sum</td>
  </tr>
        ";
        echo "<tr  >
            <td  style='border-style: none'></td>
            <td  colspan='3' style=' border-top: 2px solid black; border-left: 2px solid black; background-color: #f2f2f2;'>TVA 20%</td>
            <td style=' border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;'>$TVA</td>
  </tr>
        ";
        echo "<tr >
            <td  style='border-style: none'></td>
            <td  colspan='3' style=' border-top: 2px solid black; border-left: 2px solid black; border-bottom: 2px solid black; background-color: #f2f2f2;'>Net à Payer TTC</td>
            <td style=' border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 2px solid black;'>$TVA1</td>
  </tr>
        ";

echo "</table>";

 
}} else {
    echo "No results found. $year .$month";
}

// Close the database connection
$conn->close();
?>
<script>
    n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = d + "/" + m + "/" + y; 
    
</script>
