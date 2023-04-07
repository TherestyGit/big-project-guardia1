<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Title-Description | Charset-->
    <title>Alix WILMART</title>
    <meta charset="utf-8">
    <meta name="description" content="PortFolio : Alix WILMART">
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
        <img class="image-responsive" src="img/header.webp" alt="Image Parallax">
    </div>
</div>

<!-- Présentation de l'équipe + Card -->
<div class="section bas-de-page">
    <div class="container">
        <h1 class="header center animate__animated  animate__fadeInUp wow">Alix WILMART</h1>
        <div class="row ">
            <div class="col s12 l4 offset-l1 animate__animated animate__backInLeft wow">
                <div class="card">
                    <div class="card-image zoom-image">
                        <a href="https://www.linkedin.com/in/alix-wilmart-9aab84251/" target="_blank">
                            <img src="img/alixphoto.webp" alt="Photo Alix">
                        </a>
                    </div>
                    <div class="card-content">
                        <a href="https://www.linkedin.com/in/alix-wilmart-9aab84251/" target="_blank">
                            <ion-icon name="logo-linkedin"></ion-icon>add</a>
                        <a href="https://www.github.com/TherestyGit" target="_blank" class="black-text">
                            <ion-icon name="logo-github"></ion-icon>Check It<br><br></a>
                        <p>Elève de 1ère année à Guardia Cybersecurity School. <br> Diplômes Obtenus : <br> - Brevet des Collèges
                            <br> - Baccalauréat STI2D-EE <br><br>Pour plus d'infos :<br> Vous pouvez cliquer sur le CV pour le télécharger.</p><br>
                        <a>
                            <script src="https://tryhackme.com/badge/733206"></script>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 offset-l2 animate__animated animate__backInRight wow">
                <a href="files/CV_Alix_WILMART.pdf" download="CV_Alix_WILMART">
                    <img class="imgcv" src="img/CV_img.png" alt="CV Alix WILMART">
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Modal Structure : Contactez-nous ? + Footer -->

<?php require 'component/bas_de_page.php' ?>

</body>

</html>