<?php
include("condb.php");

if (isset($_POST['submit_com'])) {
  $comment = $_POST['comment'];
  $id = $_POST['hide'];

  $res = "INSERT INTO commentaire2 (id_pub, mesage) VALUES ('$id', '$comment')";

  if (mysqli_query($conn, $res)) {
    echo "Le commentaire à été enregistré avec succès.";
    header("location:index2.php");
  } else {
    echo "Error: " . $res . "<br>" . mysqli_error($conn);
  }
}
