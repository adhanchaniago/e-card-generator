<?php
function display_cards() {
    //establish db and connect
    $link = new mysqli('localhost', 'root', '','test');
    // sql the info
    if($link === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
    }
    $gallerysql = "SELECT * FROM text";
   
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));

    // if($result = mysqli_query($link, $gallerysql)){
    //     if(mysqli_num_rows($result) > 0){
    //         echo "<table>";
    //             echo "<tr>";
    //                 echo "<th>textId</th>";
    //                 echo "<th>randomText</th>";
    //                 echo "<th>card</th>";
    //             echo "</tr>";
    //         while($row = mysqli_fetch_array($result)){
    //             echo "<tr>";
    //                 echo "<td>" . $row['textId'] . "</td>";
    //                 echo "<td>" . $row['randomText'] . "</td>";
    //                 echo "<td><div id=\"galleryCard\"></div></td>";
    //             echo "</tr>";
    //         }
    //         echo "</table>";
    //         // Free result set
    //         mysqli_free_result($result);
    //     } else{
    //         echo "No records matching your query were found.";
    //     }
    // } else{
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    // }
     
    // // Close connection
    mysqli_close($link); 
}
    
