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
<?php require 'component/navbar.php'; ?>

<div class="ctf">
    <h1>Ouvre l'oeil et ré-éssaie</h1>
</div>
<?php require 'component/bas_de_page.php'; ?>

</body>
</html>
