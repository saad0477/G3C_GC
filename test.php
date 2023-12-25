<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Modal Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div id="modalContent">
                        <div class="form-group" style="display:flex;">
                            <label for="text1">préstation1:</label>
                            <input type="text" class="form-control" id="préstation1">
                            <label for="text2">Montant1:</label>
                            <input type="text" class="form-control" id="Montant1">
                        </div>
                      
                        <div id="dynamicFields"></div>
                        <button class="btn btn-primary" onclick="addTextField()">Add Text Field</button>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    var fieldCounter = 2; // Start with 2 initial text fields

    function addTextField() {
        // Add a new text field on "Add Text Field" button click
        var dynamicFields = document.getElementById('dynamicFields');
        var newField = document.createElement('div');
        newField.innerHTML = '<div class="form-group"  style="display:flex;"> <label for="text' + fieldCounter + '">préstation' + fieldCounter + ':</label><input type="text" class="form-control" id="préstation' + fieldCounter + '">  <label for="text'+fieldCounter + '">Montant'+fieldCounter + ':</label><input type="text" class="form-control" id="Montant' + fieldCounter + '"></div>';
                           
                              
        dynamicFields.appendChild(newField);
        fieldCounter++;
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

        // Make an AJAX request to the PHP script
        jQuery.ajax({
            type: 'POST',
            url: 'process.php', // Change this to the path of your PHP script
            data: formData,
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
</script>

</body>
</html>
