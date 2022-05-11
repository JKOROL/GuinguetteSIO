<?php
    $host="localhost";
    $nomDB="guinguette";
    $user="root";
    $pass="";
    $pdo="mysql:host=".$host.";dbname=".$nomDB;
    $bdd = new PDO($pdo,$user,$pass);
?>