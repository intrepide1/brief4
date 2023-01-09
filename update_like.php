<?php
include('condb.php');
$type=$_POST['type'];
$id=$_POST['id'];
if ($type=='like') {
    $sql= "UPDATE manger SET likeCount=likeCount+1 WHERE idPub=$id";
} 

$res1= mysqli_query($conn, $sql);
?>