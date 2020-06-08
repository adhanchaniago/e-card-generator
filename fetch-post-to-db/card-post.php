<?php 
$db = new mysqli('localhost', 'root', '', 'test');
$db->set_charset('utf8');

$color = $_POST['bg_color'];

$sql = "INSERT INTO text (randomText) VALUES ('$color')";

$result = $db->query($sql);

?>