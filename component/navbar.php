<!-- Menu Structure -->

<nav class="black" id="home">
    <div class="na  v-wrapper">
      <div class="container">
        <div class="guardia_logo">
          <a href="index.php" class="brand-logo left"> <img src=img/AW-logo.png alt="Logo AW"> </a>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons  ">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="about.php">Présentation</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Projets<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="games.php">Jeux</a></li>
          <li><a href="contact.php"><button class="waves-effect waves-light btn">Contact</button></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="about.php">Présentation</a></li>
    <ul>
      <?php
      $sql="SELECT * FROM projects";
      $pre=$pdo->prepare($sql);
      $pre->execute();
      $projects=$pre->fetchAll(PDO::FETCH_ASSOC);

      foreach ($projects as $project){?>
        <li>
          <a href="projet.php?id=<?php echo $project['id_project']?>"><?php echo $project['title']?></a>
        </li>
      <?php } ?>
    </ul>
    <li><a href="games.php">Jeux</a></li>
    <li><a href="contact.php"><button class="waves-effect waves-light btn">Contact</button></a></li>
  </ul>

<!-- MENU + SideNAV + dropdown -->

  <ul id="dropdown1" class="dropdown-content">
    <?php
    $sql="SELECT * FROM projects";
    $pre=$pdo->prepare($sql);
    $pre->execute();
    $projects=$pre->fetchAll(PDO::FETCH_ASSOC);

    foreach ($projects as $project){?>
      <li>
        <a href="projet.php?id=<?php echo $project['id_project']?>"><?php echo $project['title']?></a>
      </li>
    <?php } ?>
  </ul>
