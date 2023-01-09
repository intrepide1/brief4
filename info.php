<?php
include('condb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="infostyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a44a0b7112.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style_css.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style>
  .gallery {
    width: 350px;
    height: 350px;
    border: 2px solid #008518;
    border-radius: 50px;
    /* align-items: center; */
    margin-top: 60px;
    margin-left: 30%;
  }

  .contenant0 {
    width: 300px;
    height: 270px;
    margin-top: 35px;
    margin-left: 6%;
    box-shadow: inset;
    /* border-color: ;    */
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

  #rech {
    width: 600px;
    height: 40px;
    border-radius: 20px;
    margin-left: 20px;
    box-shadow: 1px 1px 5px lightgray;
    border-style: inherit;
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
    font-size: 10px;
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

  .type_pub {
    color: #008518;
    margin-top: -395px;
    margin-left: 400px;
  }

  .nom_pub {
    color: #3551EC;
    font-size: px;

  }

  .msg {
    color: #000000;
    font-size: 15px;
  }

  .date_pub {
    color: #596CE5;
  }

  .bloc_info {
    width: 500px;
    height: 300px;
    margin-top: 40px;
    margin-left: 60%;
  }
</style>

<body>
  &nbsp;
  <div style="display: flex;align-items: center;">
    &nbsp;&nbsp;&nbsp;<img width="140" height="45" src="images/logo.png">
    <input id="rech" type="text" name="rech">
    <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
    <img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
    <img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
    <form action="publier.php" method="get"><input type="submit" name="connexion" id="connexion" value="PUBLIER"></form>
    &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
    <form action="index.php">
      <input href="index.php" type="submit" name="Deconnexion" id="" value="deconnexion">
    </form>
  </div><br>

  <!--div de la 2eme ligne-->
  <div style="display: flex;align-items: center;">

    <div style="display: flex;align-items: center;">
      <nav>
        <a id="tout" href="#">TOUT</a>
        <a id="actu" href="#">ACTUALITES</a>
        <a id="imag" href="#">IMAGES</a>
        <a id="videos" href="#">VIDEOS</a>
        <a id="cartes" href="#">CARTES</a>
        <a id="pub" href="#">PUBLICATIONS</a>
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

  <div>
    <hr style="margin-bottom: 10px;margin-top: 1px;">
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
              <?= $row['typePub'] ?>

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

  <div>
    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM manger WHERE idPub=$id";
    $result = $conn->query($sql);
    //$rows = $result->fetch_assoc();

    while ($row = mysqli_fetch_assoc($result)) {

    ?>
      <div class="gallery">
        <img class="contenant0" src="images/<?= $row['pubimg'] ?>" width="120px;" height="150px">
      </div>
      <h1 class="type_pub"><?php echo $row['typePub']; ?></h1>
      <div class="bloc_info">
        <h3 class="nom_pub"><?php echo $row['tittre']; ?></h3>
        <p class="msg"><?php echo $row['pubcorps']; ?></p>
        <p class="date_pub"> publié le <?php echo  $row['datepub']; ?></p>

      </div>

      <!-- like/dislike -->
      <?php include("AjaxLikeDislike/likedislike.php");
      include('Commentaire/comment.php');
      ?>
    <?php
    }
    ?>
  </div>

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

    function like_update(id) {
      jQuery.ajax({
        url: 'update_like.php',
        type: 'post',
        data: 'type=like&id=' + id,
        success: function(result) {
          var current_count = jQuery('#like_loop_' + id).html();
          current_count++;
          jQuery('#like_loop_' + id).html(current_count);

        }
      });
    }

    function dislike_update(id) {
      jQuery.ajax({
        url: 'update_dislike.php',
        type: 'post',
        data: 'type=dislike&id=' + id,
        success: function(result) {
          var cur_count = jQuery('#dislike_loop_' + id).html();
          cur_count++;
          jQuery('#dislike_loop_' + id).html(cur_count);
        }
      });
    }
  </script>
</body>

</html>