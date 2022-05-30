<?php 

include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">

    <title>Document</title>
</head>
<body>

<nav class="nav-bar">

<div class="div-nav-bar">
    
    <ul class="list-nav-bar">
        <li><a  href="index.php" title="home">Accueil</a></li>
        <li><a  href="animation.php" title="animation">Animation</a></li>
        <li><a  href="carte.php" title="menu">Menu</a></li>
        <li><a  href="#works" title="partenaire">Partenaire</a></li>
        <li><a  href="#contact" title="contact">Contact</a></li>
    </ul>
</div>

</nav>

<div class="title">
<a href="index.php">
    <img class="home-logo" src="images/logo.png" alt="Homepage">
</a>
<h1>La Guinguette d'Orléans dans le (45) est à votre service.</h1>
</div>

<div class="a-la-carte">
<h2>Menu 2022</h2>
<div class="choix-menu">
    <ul>
        <li>
            <a class ="choix-menu-client" href="#">A la carte</a>
            <a class ="choix-menu-groupe" href="#">Menu Groupe</a>
        </li>
    </ul>
</div>
</div>
<div class="flex">
    <div class="carte">
    <h2>
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=1")-> fetch();
        echo $title[1];
        ?>
    </h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=2");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>
    
    <div class="carte">
    <h2> 
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=2")-> fetch();
        echo $title[1];
        ?></h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=2");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>

    <div class="carte">
    <h2> 
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=3")-> fetch();
        echo $title[1];
        ?></h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=3");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>

    <div class="carte">
    <h2> 
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=4")-> fetch();
        echo $title[1];
        ?> </h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=4");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>

    <div class="carte">
    <h2> 
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=5")-> fetch();
        echo $title[1];
        ?> </h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=5");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>

    <div class="carte">
    <h2> 
        <?php $title = $bdd->query("SELECT IdCatPlat, nom FROM menucategorie WHERE IdCatPlat=6")-> fetch();
        echo $title[1];
        ?></h2>
    <ul>
        <?php 
        $req = $bdd->query("SELECT * FROM plat WHERE IdCatePlat=6");
        while($row = $req->fetch())
        {
            ?>
            <li><?php echo $row[3]?><span><?php echo $row[1]." €";?></span></li>
            <?php
        }
        ?>
    </ul>
    </div>
    
</div>
    -->
</body>
   
</html>