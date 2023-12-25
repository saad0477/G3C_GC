<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Another Page Example</title>
</head>
<body>
 <!-- After the table -->
<button onclick="generatePDF()">Generate PDF</button>

<script>
function generatePDF() {
    // Get the selected values from the dropdowns
    var selectedChantier = document.getElementById("chantier");
    var selectedMonth = document.getElementById("month");
    var selectedYear = document.getElementById("year");

    // Check if the elements are found before accessing their values
    if (selectedChantier && selectedMonth && selectedYear) {
        var chantierValue = selectedChantier.value;
        var monthValue = selectedMonth.value;
        var yearValue = selectedYear.value;

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure it: POST-request to the URL that generates the PDF
        xhr.open('POST', 'generate_pdf.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Send the request with the selected values
        xhr.send('chantier=' + chantierValue + '&month=' + monthValue + '&year=' + yearValue);

        // This will be called after the response is received
        xhr.onload = function () {
            if (xhr.status == 200) {
                // Assuming the response is the generated PDF file name
                var pdfFileName = xhr.responseText;

                // Open the generated PDF in a new window or tab
                window.open('facture/' + pdfFileName, '_blank');
            }
        };
    } else {
        console.error('Dropdown elements not found.');
    }
}

</script>


</body>
</html>
