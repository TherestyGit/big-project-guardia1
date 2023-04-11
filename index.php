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

  <!-- Parallax -->
  <div class="parallax-container parallax-home">
    <div class="parallax image-top">
      <img class="image-responsive" src="img/bg2.webp" alt="Image Parallax">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 l4 offset-l1 home-content">
          <h1 class="title-home">Bonjour, mon nom est Alix WILMART !</h1><br>
          <p class="text-home">Je suis <span id="typed-header"></span></p>
          <p>Sur mon portfolio vous pourrez trouver :<br>- Une brève présentation de moi<br>- Des projets que j'ai eu l'occasion de faire<br>- Des jeux que j'ai développés<br>- Une page où vous pouvez me laisser un avis ou encore un message</p>
          <p>Si vous trouvez le moindre bug, vulnérabilité, faute de frappe ou d'orthographe.<br> Merci de m'envoyer un message pour que cela puisse être corrigé au plus vite</p>
          <p>Bonne Visite à vous sur mon Portfolio :)</p>
      </div>
      <div class="col s12 l4 offset-l1">
          <img class="img-home" src="img/alix_guardia.png" alt="Photo de Alix à une soutenance de Guardia">
      </div>
    </div>
  </div>


  <!-- Modal Structure : Contactez-nous ? + Footer -->
  
  <?php require 'component/bas_de_page.php' ?> 

</body>

</html>