<?php require "cfg/config.php";
global $pdo;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = 1;
}

$sql = "SELECT * FROM projects WHERE id_project = :id";
$pre = $pdo->prepare ($sql);
$pre->bindParam("id", $_GET['id']);
$pre->execute();
$data = $pre->fetch(PDO::FETCH_ASSOC);

?>



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
    <!-- Import materialize.css -->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style_project.css">
    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Import animate.style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  </head>

<!-- MENU + SideNAV + Dropdown -->
  <?php require 'component/navbar.php' ?>

<!-- Parallax Projet 1 -->
  <div class="parallax-container">
    <div class="parallax header_background_home_page"><img src="img/black_geometric.jpg" alt="background_main"></div>
      <h1 class="align-wrapper white-text">
        <?php echo ($data['title'])?></h1>
      <hr> 
  </div>
    
  <!-- Card, présentation projet 1 --> 
  <div class="background">
    <div class="section">
      <div class="container">
        <h2 class="header center animate__animated animate__zoomIn wow">Présentation</h2>
      
          <div class="row">
            <div class="col s12 l4">
              <div class="card">
                <div class="card-image">
                  <img class="modif_img" src="<?php echo ($data['img_1']) ?>" alt="com perso ">
                </div>
              <div class="card-content border_left container">
                <span class="card-title"><?php echo ($data['titre_description_1'])?></span>
                <p><?php echo ($data['description_1'])?></p>
              </div>
            </div>
          </div>

          <div class="col s12 l4">
            <div class="card">
              <div class="card-image">
                <img class="modif_img" src="<?php echo ($data['img_2']) ?>" alt="icon projet">
              </div>
            <div class="card-content border_left container">
              <span class="card-title"><?php echo ($data['titre_description_2'])?></span>
                <p><?php echo ($data['description_2'])?></p>
              </div>
            </div>
          </div>

          <div class="col s12 l4 ">
            <div class="card">
              <div class="card-image">
                <img class="modif_img" src="<?php echo ($data['img_3']) ?>" alt="Langages de programmation">
              </div>
            <div class="card-content border_left container">
              <span class="card-title"><?php echo ($data['titre_description_3'])?></span>
                <p><?php echo ($data['description_3'])?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Modal Structure : Contactez-nous ? + Footer + Script -->
  
  <?php require 'component/bas_de_page.php' ?>

  </body>
  
</html>
