<?php // process-register.inc.php
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
            echo '<div class="alert alert-dark text-center"><strong>ALERT! There was an issue registering.</strong><br>You may need to select a new username or someone may have already registered with that email.<br>Please try again.</div>';
        } else {
            // user_folder($username);
            echo '<div class="alert alert-dark text-center"><strong>You have successfully registered!</strong><br><a class="nav-link active" id="login" href="login.php"><button type="button" class="btn btn-block btn-info">Login</button></a></div>';
            // echo '<a class="nav-link active" id="login" href="login.php"><button type="button" class="btn btn-block btn-info">Login</button></a>';
        }
    } 
?>