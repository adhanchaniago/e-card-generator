<?php // process-card-viewer.inc.php
require_once "inc/db/db-connect.inc.php";
// require_once "inc/process/process-card-editor.inc.php";

if (isset($_GET['card'])) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = "https";
    } else {
        $link = "http";
    }
    $link .= "://";
    $link .= $_SERVER['HTTP_HOST'];
    $link .= $_SERVER['REQUEST_URI']; 
  
    $sql = "SELECT ecard.greeting_id, greeting.greeting_option, ecard.greeting_color, ecard.custom_greeting, ecard.message_color, ecard.bg_image, ecard.bg_color 
    FROM `ecard` AS `ecard` 
    JOIN `greeting` AS `greeting` 
    ON ecard.greeting_id = greeting.greeting_id 
    WHERE ecard.url = '$link'";

    $result = $db->query($sql);

    $row = $result->fetch_array(MYSQLI_ASSOC);

} else {
    echo '<h1 class="mt-5">No card to view.</h1>';
}

?>