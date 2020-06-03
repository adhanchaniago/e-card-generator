<?php // card-gallery.php
isset($_SESSION['firstName']) ?  $pageTitle = "{$_SESSION['firstName']}'s Cards" : $pageTitle = "Your Cards";
require_once "inc/layout/header.inc.php";
?>

<?php require_once "inc/layout/footer.inc.php"; ?>