<?php
//--------------------------------- BDD
$pdo = new PDO('mysql:host=localhost;dbname=annonceo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));










require_once('fonction.inc.php');