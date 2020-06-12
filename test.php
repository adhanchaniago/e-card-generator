<?php 

// echo com_create_guid();
// echo uniqid();

// Program to display URL of current page. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 

// Append the uniqid parameter of card
$link .="?card=" .uniqid();
      
// Print the link 
echo $link; 

// short version:
// $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
//                 $_SERVER['REQUEST_URI']; 
  
// echo $link;
?>