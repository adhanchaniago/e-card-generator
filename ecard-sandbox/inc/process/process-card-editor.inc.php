<?php 
// $db = new mysqli('localhost', 'root', '', 'test');
// $db->set_charset('utf8');

// $color = $_POST['bg_color'];

// $sql = "INSERT INTO text (randomText) VALUES ('$color')";

// $result = $db->query($sql);

$db = new mysqli('localhost', 'root', '', 'test');
$db->set_charset('utf8');

$color = $_POST['bg_color'];

// generate url here - uniqid
// uniqid()
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
// $link .= $_SERVER['REQUEST_URI']; 
$link .= "/6.11.2020/e-card-generator/ecard-sandbox/card-viewer.php";

// Append the uniqid parameter of card
$link .= "?card=" . uniqid();
      
// Print the link 
// echo $link; 

$sql = "INSERT INTO text (randomText, url) VALUES ('$color', '$link')";

$result = $db->query($sql);

$sql = "SELECT *
        FROM text 
        WHERE url = '$link'";

$result = $db->query($sql);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>

