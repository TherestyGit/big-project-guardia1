
<!-- Footer -->
<footer>
  <h2 class="center animate__animated animate__fadeInDown wow footer_title">Retrouvez les réseaux de l'école : Guardia Cybersecurity School </h2>
  <ul class="icons">
    <li><a href="https://www.linkedin.com/company/guardia-cybersecurity-school" target="_blank">
        <ion-icon name="logo-linkedin"></ion-icon>
      </a></li>
    <li><a href="https://www.facebook.com/guardiaschool/" target="_blank">
        <ion-icon name="logo-facebook"></ion-icon>
      </a></li>
    <li><a href="https://www.instagram.com/guardia_school/" target="_blank">
        <ion-icon name="logo-instagram"></ion-icon>
      </a></li>
  </ul>
  <ul class="menu">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="about.php">Présentation</a></li>
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
    <li><a href="games.php">Jeux</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>

  <div class="footer-copyright">
    <p>Big-Project for Guardia: Cybersecurity School by Theresty</p>
  </div>
</footer>

<!-- JavaScript at end of body for optimized loading -->
<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
  integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="js/script.js"></script>