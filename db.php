<?php
    $host="localhost";
    $nomDB="guinguette";
    $user="root";
    $pass="DJ637RgA";
    $pdo="mysql:host=".$host.";dbname=".$nomDB;
    $bdd = new PDO($pdo,$user,$pass);
?>