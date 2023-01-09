<?php

$email = "";
$password = "";
$errors = array();
include('condb.php');
if (isset($_POST['submit'])) {
    $email = addslashes(mysqli_real_escape_string($conn, $_POST['email']));
    $password = mysqli_real_escape_string($conn, $_POST['passwordd']);

    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = $password;
        $query = "SELECT * FROM inscription WHERE email='$email' AND passwordd ='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location:index2.php');
        } else {
            array_push($errors, "Wrong email/passwordd combination");
            echo "<div class='retour'>Les informations renseignées sont incorrectes,<br>
            veuillez réessayer ou vous inscrire à nouveau<div>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>INSCRIPTION</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:600|Noto+Sans|Open+Sans:400,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        border-radius: 5px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        text-align: center;
        font-family: sans-serif;
        justify-content: center;
        background: url(bg.jpg);
        background-size: cover;
        background-position: center;
    }

    .container {
        position: relative;
        width: 400px;
        background: white;
        padding: 60px 40px;
    }

    header {
        font-size: 40px;
        margin-bottom: 20px;
        font-family: 'Montserrat', sans-serif;
    }

    .input-field,
    form .button {
        margin: 25px 0;
        position: relative;
        height: 50px;
        width: 100%;
    }

    .input-field input {
        height: 100%;
        width: 100%;
        border: 1px solid silver;
        padding-left: 15px;
        outline: none;
        font-size: 19px;
        transition: .4s;
    }

    input:focus {
        border: 1px solid #1DA1F2;
    }

    .input-field label,
    span.show {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .input-field label {
        left: 15px;
        pointer-events: none;
        color: grey;
        font-size: 18px;
        transition: .4s;
    }

    span.show {
        right: 20px;
        color: #111;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        user-select: none;
        visibility: hidden;
        font-family: 'Open Sans', sans-serif;
    }

    input:valid~span.show {
        visibility: visible;
    }

    input:focus~label,
    input:valid~label {
        transform: translateY(-33px);
        background: white;
        font-size: 16px;
        color: #1DA1F2;
    }

    form .button {
        margin-top: 30px;
        overflow: hidden;
        z-index: 111;
    }

    .button .inner {
        position: absolute;
        height: 100%;
        width: 300%;
        left: -100%;
        z-index: -1;
        transition: all .4s;
        background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
    }

    .button:hover .inner {
        left: 0;
    }

    div.retour {
        color: #dd4b39;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: medium;
        margin-top: 55px;
    }

    .button button {
        width: 100%;
        height: 100%;
        border: none;
        background: none;
        outline: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
    }

    .container .auth {
        margin: 35px 0 20px 0;
        font-size: 19px;
        color: grey;
    }

    .links {
        display: flex;
        cursor: pointer;
    }

    .facebook,
    .google {
        height: 40px;
        width: 100%;
        border: 1px solid silver;
        border-radius: 3px;
        margin: 0 10px;
        transition: .4s;
    }

    .facebook:hover {
        border: 1px solid #4267B2;
    }

    .google:hover {
        border: 1px solid #dd4b39;
    }

    .facebook i,
    .facebook span {
        color: #4267B2;
    }

    .google i,
    .google span {
        color: #dd4b39;
    }

    .links i {
        font-size: 23px;
        line-height: 40px;
        margin-left: -90px;
    }

    .links span {
        position: absolute;
        font-size: 17px;
        font-weight: bold;
        padding-left: 8px;
        font-family: 'Open Sans', sans-serif;
    }

    .signup {
        margin-top: 50px;
        font-family: 'Noto Sans', sans-serif;
    }

    .signup a {
        color: #3498db;
        text-decoration: none;
    }

    .signup a:hover {
        text-decoration: underline;
    }
</style>

<body style="background-color:orange">
    <div class="container">
        <header>Connexion</header>
        <form method="post" action="index.php" enctype="">

            <div class="input-field">
                <input type="text" class="email" id="" name="email" required>
                <label>E-mail</label>
            </div>
            <div class="input-field">
                <input class="passwordd" type="password" id="" name="passwordd" required>
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner"></div>
                <button type="submit" name="submit">CONNEXION</button>
            </div>
        </form>
        <div class="auth">

            ou se connecter avec
        </div>
        <div class="links">
            <div class="facebook">
                <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
                <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
        </div>
        <div class="signup">
            Vous n'êtes pas inscrit? <a href="inscription.php">Créer un compte</a>
        </div>
    </div>
    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);

        function active() {
            if (input.type === "password") {
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "HIDE";
            } else {
                input.type = "password";
                show.textContent = "SHOW";
                show.style.color = "#111";
            }
        }
    </script>

</body>


</html>