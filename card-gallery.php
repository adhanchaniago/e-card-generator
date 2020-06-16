<?php // card-gallery.php
isset($_SESSION['firstName']) ?  $pageTitle = "{$_SESSION['firstName']}'s Cards" : $pageTitle = "Your Cards";
require_once "inc/layout/header.inc.php";
session_start();
?>

<!-- this page needs to be locked from public eye 
     use if logic to check for session variables.
     if user is logged in, include file to their gallery
     else a page that leads them to log in or register.
     like this:
-->

<?php 
    // if (!isset($_SESSION['loggedin'])) {
    //     // echo "<p>log in to see your gallery</p>";
    //     require_once 'inc/layout/app-info.inc.php';
    // } else {
    //     // app usage instructions
    //     require_once "inc/layout/instructions.inc.php";
    //     // upload form 
    //     require_once "inc/upload-form.php";
    //     // a place to display images uploaded
    //     echo "<div class=\"gallery-container\">";
    //         require_once "inc/display-img.php";
    //     echo "</div>";   
    //     // delete functionality
    //     require_once "delete.php";
    // }
?>

<!-- place this in an includes file in the future -->
<div class="container container-app-info">
    <div class="row row-app-info">
        <div class="col-6 app-info-text">
            <h1 class="txt-app-info">Please log in...</h1>
            <p>You must have an account to create a card.</p>
        </div>
        <div class="col-6 app-info-">
            <div><a href="login.php"><button class="btn btn-dark outline-btn btn-app-info">Login</button></a></div>
            <div><a href="register.php"><button class="btn btn-dark btn-app-info">Register</button></a></div>
        </div>
    </div>
</div>

<?php require_once "inc/layout/footer.inc.php"; ?>