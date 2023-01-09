<?php

include("condb.php");

$sql = "CREATE TABLE commentaire (
    id_com int(11) NOT NULL,
    id_pub int(11) NOT NULL,
    mesage varchar(100) NOT NULL,
    date_com timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
  )";

if (mysqli_query($conn, $sql)) {
    echo "Table commentaire created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  

?>

