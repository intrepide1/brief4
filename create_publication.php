<?php

include("condb.php");

$sql = "DROP TABLE publication";

// $sql = "CREATE TABLE publication (
//     idPub int(11) NOT NULL AUTO_INCREMENT,
//     tittre varchar(100) NOT NULL,
//     pubimg text NOT NULL,
//     typePub varchar(100) NOT NULL,
//     pubcorps varchar(100) NOT NULL,
//     likeCount int(15) NOT NULL,
//     dislikeCount int(15) NOT NULL,
//     datepub timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
//   )";

if (mysqli_query($conn, $sql)) {
    echo "Table publication delete successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  

?>

