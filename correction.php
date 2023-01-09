<?php
//connexion a la base de donnée
$servername = "localhost"; #localhost
$username = "root"; #username of phpmyadmin
$password = ""; #password of phpmyadmin
$dbname = "ecole"; #database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//recuperation sur la vue
$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["valider"])) {
    $libelle = $_POST["libelle"];
    $description = $_POST["description"];
    $date_creation = $_POST["date_creation"];

    //La requete sql à executer
    $sql = "UPDATE classes SET libelle='$libelle', description='$description', date_creation='$date_creation',  WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "succes";
        header("location:/ecole.php");
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
    <link rel='stylesheet' href='assets/style.css'>
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <title>Modification classe</title>
</head>

<body>

    <div class='container'>
        
        <div class='pull-right'>

            <h2>Page de modification</h2>

        </div>
        <div class='col-6'>
            <form method='POST' enctype='multipart/form-data' action=''>
                <div class='mb-3'>
                    <label for='libelle' class='form-label'>Libellé</label>
                    <input type='text' class='form-control' id='libelle' name='libelle' value='$row[libelle]' required>
                </div>

                <div class='mb-3'>
                    <label class='form-label'>Description</label>
                    <input type='text' class='form-control' name='description' value='$row[description]' required>
                </div>

                <div class='mb-3'>
                    <label for='date_creation' class='form-label'>Date création de la classe</label>
                    <input type='date' class='form-control' id='date_creation' name='date_creation'
                        value='$row[date_creation]' required>
                </div>
                <div class='button'>
                <button type='submit' name='valider' class='btn btn-primary'>Valider</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>
    ";
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
