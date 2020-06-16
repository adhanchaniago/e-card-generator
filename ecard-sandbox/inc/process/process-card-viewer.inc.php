<?php 
// MUST BE INCLUDED ON card-viewer.inc.php
if (isset($_GET['card'])) {
    // make db connection
    $db = new mysqli('localhost', 'root', '', 'test');
    $db->set_charset('utf8');

    // query db for card table and url column
    $queryParam = $_GET['card'];

    $sql = "SELECT * 
            FROM text 
            WHERE url = '$queryParam'";
    echo $sql;
    // get matching row and save it as JSON object
    $result = $db->query($sql);
    // return JSON object
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));

    // ON JS SIDE
    // tie URL (and its associated fields) to displaying card in browser
    // probably by parsing returned data? make sure key names are consistent so values can change and result will always remain the same. 

    // their should be a preview card page for this... not in editor situation... 
} else {
    echo json_encode(['error' => 'No card to share!']);
}


?>