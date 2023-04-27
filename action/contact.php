<?php
require_once "../cfg/config.php"; 

//On ecrit la requete sans entrer les valeurs directement dans la variable
//Dans le but de se proteger des injections SQL
$sql = "INSERT INTO contact(name,message) VALUES(:name,:message)";
//On prepare la requete
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam('name', $_POST['name']);
$pre->bindParam('message',$_POST['message']);

//On execute la requete
$pre->execute();

header('Location: ../contact.php');
?>