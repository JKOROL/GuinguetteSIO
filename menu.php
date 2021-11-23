<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');
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
    <title>Document</title>
</head>
<body>
<li><a href="backoffice.php">Retour au back office</a></li>
<div class="formulaire">
    <form action="menu.php" method="POST">
        <label for="nom"> Nom: <input type="text" name="nom" id="nom" required></label>
        <label for="prix"> prix: <input type="text" name="prix" id="prix" required></label>
        <input type="submit" name="button" id="button" value ="Envoyer">
    </form>
</div>

</body>
</html>