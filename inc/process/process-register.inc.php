<?php // process-register.inc.php
require_once '../db/db-connect.inc.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $db->real_escape_string($_POST['username']);
        $email = $db->real_escape_string($_POST['email']);
        $first_name = $db->real_escape_string($_POST['first_name']);
        $last_name = $db->real_escape_string($_POST['last_name']);
        $password = hash('sha512', $db->real_escape_string($_POST['password']));
        $sql = "INSERT INTO user (username,email,first_name,last_name,password) 
                        VALUES('$username','$email','$first_name','$last_name','$password')";
        // echo $sql;
        $result = $db->query($sql);

        if (!$result) {
            header("Location: ../../egreet.php?message=error");
        } else {
            header("Location: ../../login.php?message=registered");

        }
    } 
?>