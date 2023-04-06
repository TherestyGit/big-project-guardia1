<?php

session_start();

$pdo = new PDO(
    'mysql:host=mysql-projet5.alwaysdata.net;dbname=projet5_bigproject;',
    'projet5',
    'rootbigproject',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>


