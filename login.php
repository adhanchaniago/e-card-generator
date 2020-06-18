<?php // login.php 
$pageTitle = "Login";
require_once "inc/layout/header.inc.php";
// require_once 'inc/process/process-login.inc.php';
session_start();

echo'<div class="login-form-container">';
    if (isset($_GET['message']) && $_GET['message'] == 'registered') {
        echo '<p class="alert alert-dark text-center">Account successfully created. Please login now.</p>';
    }
?>

<div class="container-fluid login-container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-msg">
            <div class="register__welcome-msg">
                <div class="register__cta">
                    <img src="img/login.png" height="150">
                </div>
                <div>
                    <h1>Let's login.</h1>
                    <p>Don't have an account yet? <a href="register.php">Register Here</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 form-container">
            <form action="inc/process/process-login.inc.php" method="POST" id="registration-form">
                <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control registration-username" type="text" id="username" required name="username">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" required name="password">
                <span id="showPassword" onclick="showPassword();">Show Password</span>
                </div>
                
                <div class="form-group">
                <button class="btn btn-dark" type="submit">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once "inc/layout/footer.inc.php"; ?>
