<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate PDF</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="pdfForm" action="generate_pdf.php" method="post">
    <!-- Your form inputs go here -->
    <label for="date">Date:</label>
    <input type="text" name="date" id="date" required>
    <br>
    <label for="marche">Marche:</label>
    <input type="text" name="marche" id="marche" required>
    <br>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>
    <br>
    <label for="designation">Designation:</label>
    <input type="text" name="designation" id="designation" required>
    <br>
    <label for="qty">Qty:</label>
    <input type="text" name="qty" id="qty" required>
    <br>
    <label for="pu">PU:</label>
    <input type="text" name="pu" id="pu" required>
    <br>
    <label for="montant">Montant HT:</label>
    <input type="text" name="montant" id="montant" required>
    <br>
    <button type="button" id="generatePdf">Generate PDF</button>
</form>

<script>
$(document).ready(function() {
    $("#generatePdf").click(function() {
        // Send form data to PHP for PDF generation
        $.ajax({
            type: "POST",
            url: "generate_pdf.php", // Update with your actual PHP file
            data: $("#pdfForm").serialize(),
            success: function(response) {
                // Assuming the PDF generation is successful
                // You can handle the response based on your requirements
                alert("PDF generated successfully!");
            },
            error: function(error) {
                // Handle errors if any
                console.error("Error generating PDF:", error);
            }
        });
    });
});
</script>

</body>
</html>
