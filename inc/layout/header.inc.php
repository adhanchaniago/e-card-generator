<?php // header.inc.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>eGreet | <?=$pageTitle?></title>
</head>

<body>
    <div class="main-content"> 
        <div class="container-fluid container-one">
            <div class="row one">
                <div class="col-12 r-one__header">
                    <!-- div for navigation -->
                    <div class="col r-one__logo">
                        <img src="img/egreet-no-bg.png" alt="e-Greet logo" height="75">
                    </div>
                    <div class="col r-one__welcome">
                        <!-- <h1 class="r-one__welcome">Welcome!</h1> -->
                        <div class="account">
                            <p id="register"><a href="register.php">Register</a></p>
                            <p id="login"><a href="login.php">Login</a></p>
                            <p id="logout"><a href="">Logout</a></p>
                            <p class="card-gallery"><a href="card-gallery.php">Your Cards</a></p>
                            <p class="editor"><a href="card-editor.php">New Card</a></p>
                        </div>
                    </div>
                </div>
            </div>
