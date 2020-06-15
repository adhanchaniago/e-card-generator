<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (isset($_GET['card'])) {
    // make db connection
    $db = new mysqli('localhost', 'root', '', 'test');
    $db->set_charset('utf8');

    // query db for card table and url column
    $link = "http://localhost/6.11.2020/e-card-generator/ecard-sandbox/card-viewer.php?card={$_GET['card']}";
    // $queryParam = $_GET['card'];

    $sql = "SELECT * 
            FROM text 
            WHERE url = '$link'";
            
    // echo $sql;
    // get matching row and save it as JSON object
    $result = $db->query($sql);
    // return JSON object
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    // $result->fetch_assoc();
    // print_r($result);
    // $result->fetch_all(MYSQLI_ASSOC);

    // // Associative array
    // $row = $result -> fetch_array(MYSQLI_ASSOC);
    // printf ("%s (%s) %s\n", $row["textId"], $row["randomText"], $row["url"]);


    // $bgColor = $row["randomText"];
    // print_r($result);
} else {
    // echo "Something went wrong";
    echo json_encode(['error' => 'No card to share!']);
}
?>


<script src="js/viewCard.js"></script>
</body>
</html>