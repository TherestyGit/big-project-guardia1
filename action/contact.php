<?php 
#signup.php
require_once "../cfg/config.php"; 

//On ecrit la requete sans entrer les valeurs directement dans la variable
//Dans le but de se proteger des injections SQL
$sql = "INSERT INTO contact(name,email,message) VALUES(:name,:email,:message)";
//On prepare la requete
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam('name', $_POST['name']);
$pre->bindParam('email',$_POST['email']);
$pre->bindParam('message',$_POST['message']);

//On execute la requete
$pre->execute();

//echo "Merci du message, il sera traîté le plus rapidement possible !";
header('Location: ../index.php');
?>