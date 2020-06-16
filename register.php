<?php // register.php
$pageTitle = "Register"; 
require_once "inc/layout/header.inc.php";
require_once "inc/db/db-connect.inc.php";
require_once "inc/process/process.register.inc.php"
// session_start();
?>

<div class="container-fluid register-container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-msg">
            <div class="register__welcome-msg">
                <div class="register__cta">
                    <img src="img/hand-wave.png" height="150">
                </div>
                <div>
                    <h1>Hi there!</h1>
                    <h2>Let's set up an account.</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 form-container">
            <form action="" method="POST" id="registration-form">
                <div class="form-group">
                <label for="first_name">First Name</label>
                <input class="form-control" type="text" id="first_name" required name="first_name"></div>
                
                <div class="form-group">
                <label for="last_name">Last Name</label>
                <input class="form-control" type="text" id="last_name" required name="last_name">
                </div>

                <div class="form-group">
                <label for="username">Username</label>
                <span data-username data-message>Choose another username - only letters allowed</span>
                <input class="form-control registration-username" type="text" id="username" required name="username">
                </div>

                <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" required name="email">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" required name="password">
                </div>
                
                <div class="form-group">
                <button class="btn btn-dark" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "inc/layout/footer.inc.php"; ?>

