<?php // process-card-gallery.inc.php 
require_once "../db/db-connect.inc.php";
session_start();

$userID = $_SESSION['user_id'];

$sql = "SELECT * 
        FROM ecard
        WHERE user_id = '$userID'";


$result = $db->query($sql);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>