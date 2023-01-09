<?php

include("condb.php");

if (isset($_POST["submit"])) {
    # code...
    // Recuperer le nom 
    $nom = addslashes($_POST["nom"]);

    //recuperer le prenom
    $prenom = addslashes($_POST["prenom"]);

    //recuperer le mail
    $email = addslashes($_POST["email"]);

    //recuperer le mot de pass
    $passwordd = addslashes($_POST["mot_de_pass"]);

    //insertion dans la table
    $sql = "INSERT INTO inscription (nom,prenom,email, passwordd) VALUES ('$nom', '$prenom', '$email', '$passwordd')";

    if (mysqli_query($conn, $sql)) {
        echo "Votre inscription a réussi.";
        header("location:publier.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Votre inscription a échouée";
}
