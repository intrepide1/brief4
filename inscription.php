<?php
include("condb.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>INSCRIPTION</title>
</head>

<body style="background-color:black">
    <div class="container">
        <header>Nouveau compte</header>
        <form method="POST" enctype="multipart/form-data" action="action.php">
            <div class="input-field">
                <input type="text" class="nom" id="" name="nom" required required>
                <label>Nom</label>
            </div>
            <div class="input-field">
                <input type="text" class="prenom" id="" name="prenom" required>
                <label>Prenom</label>
            </div>
            <div class="input-field">
                <input type="email" class="email" id="" name="email" required>
                <label>E-mail</label>
            </div>
            <div class="input-field">
                <input type="password" class="passswordd" id="" name="passwordd" required>
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner"></div>
                <button type="submit" name="submit">INSCRIPTION</button>
            </div>
        </form>

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