<?php 
$db = new mysqli('localhost', 'root', '', 'test');
$db->set_charset('utf8');

$color = $_POST['bg_color'];

// generate url here - uniqid
// uniqid()

$sql = "INSERT INTO text (randomText) VALUES ('$color')";

$result = $db->query($sql);

?>