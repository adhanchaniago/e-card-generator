<?php // card-gallery.php
session_start();

isset($_SESSION['first_name']) ?  $pageTitle = "{$_SESSION['first_name']}'s Cards" : $pageTitle = "Your Cards";
require_once "inc/layout/header.inc.php";

if (!isset($_SESSION['loggedin'])) {
    require_once "inc/layout/access-denied.inc.php";
} else {
    require_once "inc/layout/user-gallery.inc.php";
}

require_once "inc/layout/footer.inc.php"; 
?>
