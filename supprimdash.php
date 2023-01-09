<?php

//recuperation sur la vue
$id_ins = $_GET['id_ins'];

//La requete sql à executer
$sql = "DELETE FROM inscription WHERE id_ins = $id_ins";


//connexion a la base de donnée
include("condb.php");

//Execution de la requete
mysqli_query($conn, $sql);

//redirection vers la liste
header("location:dash.php");
