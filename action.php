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
///existance de mail
$select = mysqli_query($conn, "SELECT * FROM inscription WHERE email = '" . $_POST['email'] . "'");
if (mysqli_num_rows($select)) {
    exit('Cette adresse email est déjà utilisé');
}
//recuperation sur la vue
if (isset($_POST["submit"]) || empty($_POST['nom'])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $passwordd = $_POST['passwordd'];
};
//La requete sql à executer
$sql = "INSERT INTO inscription (nom, prenom, email, passwordd) 
VALUES('$nom','$prenom', '$email', '$passwordd')";


if (mysqli_query($conn, $sql)) {
    echo "succes";
    header("location:index.php");
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("location:index.php");


