<?php // process-card-editor.inc.php
require_once "../db/db-connect.inc.php";
session_start();

// get a handle on all the form data passed in through fetch
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // $cardName = $_POST['cardName'];
    isset($_POST['cardName']) ? $cardName = $_POST['cardName'] : $cardName = "Untitled" . uniqid();
    $greetingID = $_POST['greetingID'];
    $greetingColor = $_POST['greetingColor'];
    $customGreeting = $_POST['customGreeting'];
    $messageColor = $_POST['messageColor'];
    isset($_POST['bgImage']) ? $bgImage = $_POST['bgImage'] : $bgImage = 'none';
    isset($_POST['bgColor']) ? $bgColor = $_POST['bgColor'] : $bgColor = 'none';
    $userID = $_SESSION['user_id'];

    // build custom URL
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = "https";
    } else {
        $link = "http";
    }
    
    $link .= "://";
    $link .= $_SERVER['HTTP_HOST'];
    $link .= $_SERVER['REQUEST_URI']; 
    $link .= "?card=" . uniqid();
    // replace card-editor.php with card-viewer.php
    $pattern = '/inc\/process\/process-card-editor.inc.php/';
    $replacement = "card-viewer.php";
    $link = preg_replace($pattern, $replacement, $link);
        
    // save to DB
    $sql = "INSERT INTO `ecard` (`user_id`, `greeting_id`, `greeting_color`, `custom_greeting`, `message_color`, `bg_image`, `bg_color`, `url`, `card_name`)
            VALUES ($userID, $greetingID, '$greetingColor', '$customGreeting', '$messageColor', '$bgImage', '$bgColor', '$link', '$cardName')";

    $result = $db->query($sql);

    $sql = "SELECT * 
            FROM ecard
            WHERE url = '$link'";

    $result = $db->query($sql);

    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
} else {
    echo "Failed to save card.";
}


?>