<html>
<head>
    <title>CTF Bonus :)</title>
    <meta charset="utf-8">
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

    <script type="text/javascript">

        pass = '%63%70%61%73%62%69%65%6e%64%75%72%70%61%73%73%77%6f%72%64';
        h = window.prompt('Entrez le mot de passe');
        if(h == unescape(pass)) {
            alert('Password accepté...');
            alert('Redirection en cours... ;)');
            document.location.href="https://www.youtube.com/watch?v=O91DT1pR1ew"
        } else {
            alert('Mauvais mot de passe, essayer encore !');
        }

    </script>
</head>
<body>

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
                <li><a href="games.php">Jeux</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="about.php">Présentation</a></li>
      <li><a href="games.php">Jeux</a></li>
    <li><a href="contact.php"><button class="waves-effect waves-light btn">Contact</button></a></li>
</ul>


<div class="ctf">
    <h1>Ouvre l'oeil et ré-éssaie</h1>
    <p>Inspecter l'élément peut-être utile</p>
    <p>Challenge repris du Challenge d'Obfuscation JS de root-me</p>
</div>

<!-- Footer -->
<footer>
    <h2 class="center animate__animated animate__fadeInDown wow footer_title">Retrouvez-moi sur mes différents réseaux </h2>
    <ul class="icons">
        <li><a href="https://www.linkedin.com/in/alix-wilmart-9aab84251/" target="_blank">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
        <li><a href="https://www.github.com/TherestyGit" target="_blank">
                <ion-icon name="logo-github"></ion-icon>
            </a></li>
    </ul>
    <ul class="menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="about.php">Présentation</a></li>
        <li><a href="games.php">Jeux</a></li>
    </ul>

    <div class="footer-copyright">
        <p>Big-Project for Guardia Cybersecurity School by Theresty</p>
    </div>
</footer>

<!-- JavaScript at end of body for optimized loading -->
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="js/script.js"></script>

</body>
</html>
