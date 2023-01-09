<?php
include("condb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="images/logo.png">
                        <span class="nav-item">Admin</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-menorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-comment"></i>
                        <span class="nav-item">Message</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-database"></i>
                        <span class="nav-item">Modifier</span>
                    </a></li>

                <li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Paramètre</span>
                    </a></li>

                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>

                        <span class="nav-item" href="index.php" name="Deconnexion">Déconnexion></span>

                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>email</th>
                        <th>Mot de pass</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $req = "SELECT * FROM  inscription ";
                    $result = mysqli_query($conn, $req);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row['id_ins'] ?></td>
                                <td><?php echo $row['nom'] ?></td>
                                <td><?php echo $row['prenom'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['passwordd'] ?></td>

                                <td><button class="btn btn-primary" type="submit" name="modifier"><a href="modifier.php?id_ins=<?php echo $row['id_ins'] ?>">modifier</a></button></td>
                                <td><button><a class=" btn btn-danger" href="supprimdash.php?id_ins=<?php echo $row['id_ins'] ?>">supprimer</a></button></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
    </div>
    </section>
    </section>
    </div>

</body>

</html>