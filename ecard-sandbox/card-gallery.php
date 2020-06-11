<?php require_once "inc\process\gallery-builder.inc.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Card Test</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="gallery">
            <?php display_cards(); ?>
        </div>
    </div>
</div>
<script src="js\script.js"></script>
</body>

</html>