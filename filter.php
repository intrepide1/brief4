<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include("condb.php");
  if (isset($_POST['request'])) {
    $request = $_POST['request'];
    $req1 = "SELECT*FROM manger WHERE typePub='$request'";
    $result = mysqli_query($conn, $req1);
    $count = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {
      echo '
  <div class="gallery" style="display:none">
    <a target="_blank" href="info.php?id=' . $row['idPub'] . '">
      <img src="images/' . $row['pubimg'] . '" alt="" srcset="">
    </a>

    <div class="desc">' . $row['tittre'] . '<br>
      publié le:' . $row['datepub'] . '</div>
  </div>';
    }
  }

  ?>
  <?php include("voir_plus/voirplus.php"); ?>
</body>

</html>

<script>
  $(document).ready(function() {
    $('.gallery').slice(0, 10).show()
    $('.btn').on('click', function() {
      $('.gallery:hidden').slice(0, 10).slideDown('show')
      if ($('.gallery:hidden').length == 0) {
        $(this).text('Il y a plus d\'images à afficher');
      }
      return false;
    });
  });
</script>