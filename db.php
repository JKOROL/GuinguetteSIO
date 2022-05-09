<?php
    $host="localhost";
    $nomDB="Guinguette";
    $user="root";
    $pass="";
    $pdo="mysql:host=".$host.";dbname=".$nomDB;
    $bdd = new PDO($pdo,$user,$pass);
?>