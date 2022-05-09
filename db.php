<?php
    $host="localhost";
    $nomDB="guinguettesio-main";
    $user="root";
    $pass="";
    $pdo="mysql:host=".$host.";dbname=".$nomDB;
    $bdd = new PDO($pdo,$user,$pass);
?>