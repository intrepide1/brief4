<?php

include("condb.php");

if (isset($_POST["submit"])) {
  # code...
  // Recuperer le nom de l'image (retrieve)
  $titre = addslashes($_POST["pubtitre"]);

  //recuperer le type d'image
  $type = addslashes($_POST["pubtype"]);

  //recuperer le message
  $message = addslashes($_POST["mess"]);


  //
  $img_name = $_FILES['file']['name'];
  $img_size = $_FILES['file']['size'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $error = $_FILES['file']['error'];

  if ($error === 0) {
    if ($img_size === 60000) {
      echo "Désolé, ton fichier est trop lourd";
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png");
      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = "images/" . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        $sql = "INSERT INTO manger (pubimg,tittre,typePub, pubcorps) VALUES ('$new_img_name', '$titre', '$type', '$message')";

        if (mysqli_query($conn, $sql)) {
          echo "L'image à été enregistré avec succès.";
          header("location:index2.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      } else {
        echo "Ce type de fichier ne peut etre importé";
      }
    }
  }
}
