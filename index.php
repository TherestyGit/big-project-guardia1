<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Title-Description | Charset-->
  <title>Projet 5 : Portfolio</title>
  <meta charset="utf-8">
  <meta name="description" content="PortFolio : Projet 5">
  <link rel="shortcut icon" href="guardia.ico">
  <!-- Import Google Icon Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  <!-- Import materialize.css -->
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Let browser know website is optimized for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" rel="stylesheet">
  <!-- Import animate.style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <?php require 'cfg/config.php'; ?>
</head>

<body>

  <!-- MENU + SideNAV + Dropdown Structure -->

  <?php require 'component/navbar.php'; ?>

  <!-- Parallax -->
  <div class="parallax-container">
    <div class="parallax image-top">
      <img class="image-responsive" src="img/bg2.webp" alt="Image Parallax">
    </div>
  </div>

  <div class="container">
  <h1 class="center">Bienvenue mon reuf :)</h1>
  </div>

  <!-- Modal Structure : Contactez-nous ? + Footer -->
  
  <?php require 'component/bas_de_page.php' ?> 

</body>

</html>