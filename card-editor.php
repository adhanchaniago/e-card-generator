<?php // card-editor.php 
$pageTitle = "Edit Your Card";
require_once "inc/layout/header.inc.php";
session_start();

if (!isset($_SESSION['loggedin'])) {
    require_once 'inc/layout/access-denied.inc.php';
} else {
    require_once 'inc/layout/editor.inc.php';
}
?>

<?php require_once "inc/layout/footer.inc.php"; ?>