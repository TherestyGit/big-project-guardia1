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
    <div class="parallax header_background_home_page"><img src="img/black_geometric.jpg" alt="background_main"></div>
    <h1 class="align-wrapper white-text contact-title">
        LAISSEZ UN AVIS</h1>
    <hr>
</div>

<form id="form" class="form-contact">

    <input id="name" type="text" placeholder="Nom" class="input-contact">
    <input id="email" type="text" placeholder="E-mail" class="input-contact">
    <textarea class="input-contact materialize-textarea" id="message" type="text" placeholder="Entrez votre message..."></textarea>
    <button class="waves-effect waves-light btn button-send-contact" id="submit" type="submit"> Envoyer</button>


</form>

<!--Footer -->

<?php require 'component/bas_de_page.php' ?>

</body>

</html>