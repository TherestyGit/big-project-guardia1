<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Title-Description | Charset-->
    <title>Alix WILMART</title>
    <meta charset="utf-8">
    <meta name="description" content="PortFolio : Alix WILMART">
    <link rel="shortcut icon" href="AW-logo.ico">
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

<div class="parallax-container parallax-home">
    <div class="parallax image-top">
        <img class="image-responsive" src="img/gamepage.png" alt="Image Parallax">
    </div>
</div>

<a class="titlegame-a" href="ctf.php"><h1 class="center title-game">Une envie de jouer ?</h1></a>
<div class="container">
    <div class="row">
        <h2 class="col s12 l4 offset-l1"> ... en Python</h2>
        <h3 class="col s12 l4 offset-l3"> ... en C</h3>
    </div>
</div>



<!-- Modal Structure : Contactez-nous ? + Footer -->

<?php require 'component/bas_de_page.php' ?>

</body>

</html>