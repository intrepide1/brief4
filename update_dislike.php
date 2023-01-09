<?php
include('condb.php');
$type=$_POST['type'];
$id=$_POST['id'];
if ($type=='dislike') {
    $sq2= "UPDATE manger SET dislikeCount=dislikeCount+1 WHERE idPub=$id";
} 
$res1= mysqli_query($conn, $sq2);
?>