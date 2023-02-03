<?php
include_once("generate_excel.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <button class="btn btn-info" id="showData">Göstər</button>
    <button class="btn btn-success" id="excel">Excel</button>
    <div class="container" id="table-container"></div>
    <form action="generate_excel.php" method="post" id="export-form">
        <input type="hidden" value="" id="hidden-type" name="ExportType" />
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax-script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>