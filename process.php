<?php
 
include 'config.php';
              // Assuming you have received the value from the form
                 $allData = $_POST;
                //  print_r($allData);
                 $id_e=isset($_POST['id_e']) ? $_POST['id_e'] : '';
                $selectedchantierr = isset($_POST['chantier']) ? $_POST['chantier'] : '';
                 $selectedmonth = isset($_POST['month']) ? $_POST['month'] : '';
                 $selectedyear = isset($_POST['year']) ? $_POST['year'] : '';
                 
                
                     
                    // $selectedchantierr =  $_POST['chantier'];
                    // $selectedmonth =  $_POST['month'];
                    // $selectedyear =  $_POST['year'];
                     // Assuming you have a table named 'your_table' with columns 'value' and 'text'
             
    
 




// Loop through the formData array
foreach ($allData as $key => $entry) {
    // Check if the key starts with 'entry' (assuming this from your previous structure)
    if (strpos($key, 'entry') === 0) {
        // Extract 'préstation' and 'Montant' values from the entry
        $p = mysqli_real_escape_string($conn, $entry['préstation']);
        $m = mysqli_real_escape_string($conn, $entry['Montant']);
        


        $sql = "INSERT INTO montant (id_e,id_c,Montant,mois,année,prestation) VALUES 
        ('$id_e','$selectedchantierr', '$m','$selectedmonth','$selectedyear','$p')";              
     
     
     
     if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }
       

    }
 
            $conn->close();
 
?>
