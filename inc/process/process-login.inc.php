<?php // process-login.inc.php
require_once "../db/db-connect.inc.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
     echo $sql;

    $result = $db->query($sql);
    if ($result->num_rows == 1) {
        
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['loggedin'] = 1;


        header("Location: ../../card-editor.php");

    } else {
        echo '<div class="alert alert-dark text-center"><strong>There was a problem logging in.<br>Please try again or</strong><br><a class="nav-link active" id="registerbtn" href="registration.php"><button type="button" class="btn btn-block btn-info">Register</button></a></div>';
    }
}
?>