<?php 
// print_r($_POST);

$db = new mysqli('localhost', 'root', '', 'test');
$db->set_charset('utf8');

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];

$sql = "INSERT INTO user (firstName, lastName) VALUES ('$firstName', '$lastName')";

$result = $db->query($sql);

?>