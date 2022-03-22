<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguettesio-main;charset=utf8','root','');
if(isset($_POST["button"]))
{
    if(isset($_POST["nom"]))
    {
        $req="INSERT INTO menurestaurant(Nom, Prix) VALUES('".$_POST["nom"]."', ".$_POST["prix"].")";
        echo $req;
        $test=$bdd->exec($req);
        echo $test;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/formulaire.css">

    <title>Document</title>
</head>
<body>
<?php require("backoffice.php"); ?>
<a href="index.php" class="link-logo">
    <img class="home-logo" src="images/logo.png" alt="Homepage">
</a>
<div class="formulaire">
    <form action="menu.php" method="POST">
        <h2>Ajouter un Menu</h2>
        <div class="flex-form">
            <label for="nom"> Nom: <input class="input-admin" type="text" name="nom" id="nom" required></label>
            <label for="prix"> prix: <input class="input-admin" type="text" name="prix" id="prix" required></label>
        </div><br>
        <input class="form-button" type="submit" name="button" id="button" value ="Envoyer">
    </form>
</div>

</body>
</html>