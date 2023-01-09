<?php
$servername = "localhost"; #localhost
$username = "root"; #username of phpmyadmin
$password = ""; #password of phpmyadmin
$dbname = "intrepide_food"; #database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//recuperation sur la vue
$id_ins = $_GET['id_ins'];
$sql = "SELECT * FROM inscription WHERE id_ins = $id_ins";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $passwordd = $_POST["passwordd"];

    //La requete sql à executer
    $sql = "UPDATE inscription SET nom='$nom', prenom='$prenom',
 email='$email', passwordd='$passwordd' WHERE id_ins=$id_ins";

    if (mysqli_query($conn, $sql)) {
        echo "succes";
        header("location:dash.php");
    } else {
        echo "echoué";
    }
}

if ($row > 0) {
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <title>Document</title>
</head>

<body>
 
 <div class='container'>
 
 <header>MODIFICATION</header>

 <form method='POST' enctype='multipart/form-data' action=''>

     <div class='input-field'>
         <input type='text' class='nom' name='nom' value=' $row[nom]'  required>
         <label>Nom</label>
     </div>
     <div class='input-field'>
         <input type='text' class='prenom' name='prenom' value=' $row[prenom]' required>
         <label>Prenom</label>
     </div>
     <div class='input-field'>
         <input type='text' class='email'  name='email' value=' $row[email]' required>
         <label>E-mail</label>
     </div>
     <div class='input-field'>
         <input type='password' class='passswordd' name='passwordd' value=' $row[passwordd]' required>
         <span class='show'>Afficher</span>
         <label>Password</label>
     </div>
     <div class='button'>
         <div class='inner'></div>
         <button type='submit' name='valider'>VALIDER</button>
     </div>
 </form>

</div>

</body>

</html>
    ";
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
