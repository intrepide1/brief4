<?php
include("condb.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>welikefood</title>
  <link rel="stylesheet" type="text/css" href="style_css.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <style>
    div.gallery {
      margin-left: 10px;
      margin-top: 5px;
      margin-bottom: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 235px;
      height: 210px;
      border-radius: 10px;
    }

    div.gallery:hover {
      border: 1px solid #777;
      box-shadow: 2px 2px 8px lightgray;
    }

    div.gallery img {
      width: 235px;
      height: 140px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    div.desc {
      padding: 5px;
      text-align: left;
      width: 235px;
      height: 70px;
    }

    /* texte dans image */
    .overlay {
      margin-top: -40px;
      color: transparent;
      text-align: center;
      opacity: 1;
      width: 22%;
      z-index: 1;
      position: absolute;
      top: 90%;
      background: rgba(0, 0, 0, 0, 8);
      color: white;
    }

    /* la petite image sur l'image */
    .img_plus {
      opacity: 0;
      transition: .5s ease;
      text-align: right;
      height: 40px;
      width: 40px;
    }

    #commentaire {

      background: #f2f2f2;
      border: 1px solid #999;
      bottom: 0;
      color: #36b;
      cursor: pointer;
      display: block;
      height: 28px;
      line-height: 28px;
      min-width: 110px;
      padding: 0 5px;
      position: fixed;
      right: 20px;
      text-align: center;
      z-index: 4;
      font-family: 'Roboto', Helvetica, Sans-Serif;
      font-size: 13px;
    }

    /*caroussel*/
    .swiper {
      width: 100%;
      height: 20%;
    }

    .swiper-slide {
      font-size: 18px;
      background: #fff;
      margin: 5px;
      padding: 10px;
      display: flex;
      border-radius: 50px;
      border: 0.5px solid skyblue;
      width: 170px;
      height: 55px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    /*fin caroussel*/

    .div_text_scroll {
      font-size: 8px;
      width: 50px;
      height: 30px;
      margin-left: 6px;
      margin-bottom: 4px;
    }

    .img_scroll {
      width: 40px;
      height: 30px;
      border-radius: 50%;
      margin-left: -8px;
    }

    head {
      min-width: 1000px;
    }

    body {
      min-width: 1000px;
      position: relative;
    }

    .amg_car {
      style: display inline-block;
      align-items: "center";

    }


    form {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 250px;
    }

    h1 {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>
</head>

<body>
  &nbsp;
  <div style="display: flex;align-items: center;">
    &nbsp;&nbsp;&nbsp;<img width="100" height="35" src="images/logo.png">
    <input id="rech" type="text" name="rech">
    <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
    <img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
    <img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
    <input type="button" name="connexion" id="connexion" value="connexion">
    &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
  </div><br>

  <!--div de la 2eme ligne-->
  <div style="display: flex;align-items: center;">

    <div style="display: flex;align-items: center;">
      <nav>
        <a id="tout" href="#">TOUT</a>
        <a id="actu" href="#">ACTUALITES</a>
        <a id="imag" href="">IMAGES</a>
        <a id="videos" href="#">VIDEOS</a>
        <a id="cartes" href="#">CARTES</a>
        <a id="pub" href="publier.php">PUBLICATIONS</a>
        <div class="animation start-home"></div>
      </nav>
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div style="display: flex;align-items: center;">
      Filtre adulte: &nbsp;
      <?php
      include("Filter/filter_image.php");
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom: -7px;" src="images/filtre.png">
    </div>
  </div>

  <!--fin div de la 2eme ligne-->

  <!--trait de separation-->

  <div <hr style="margin-bottom: 10px;margin-top: 1px;">
  </div>


  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      $req = "SELECT*FROM manger ORDER BY idPub DESC";
      $result = mysqli_query($conn, $req);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>

          <div class="swiper-slide">
            <img class="img_scroll" src="images/<?= $row['pubimg'] ?>" alt="image">
            <div class="div_text_scroll"> <?php echo $row['tittre']; ?> <br>
              <b><?= $row['typePub'] ?></b>

            </div>

          </div>&nbsp;&nbsp;
      <?php
        }
      }
      ?>

    </div>

    <!-- les fleches -->
    <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -40px;margin-right: 0;"></div>
    <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -40px;"></div>
    <!--<div class="swiper-pagination"></div>-->
  </div>

  <h1>PUBLICATION</h1>

  <form action="recuppub.php" method="post" enctype="multipart/form-data">

    <label>Titre de la publication :</label>
    <input type="text" name="pubtitre" id="">
    <label for="">Type de publication :</label>
    <select name="pubtype">
      <option id="rest">Restaurant</option>
      <option id="rec">Recette</option>
      <option id="retex">Retour d'expérience</option>
      <option id="cons">Conseil</option>
    </select>

    <label for="">Image associée</label>
    <input type="file" name="file">
    <label for="">Corps du message</label>
    <textarea type="text" name="mess" id="" cols="45" rows="6" maxlength="500" name="pubtext"></textarea>
    <input type="submit" name="submit" value="Publier">
  </form>

</body>

</html>

<!-- script js -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 12,
    spaceBetween: 1,
    slidesPerGroup: 12,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>