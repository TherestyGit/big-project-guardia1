<?php

session_start();

$pdo = new PDO(
    'mysql:host=mysql-theresty.alwaysdata.net;dbname=theresty_bigproject;',
    'username',
    'password',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>


