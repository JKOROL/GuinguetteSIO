<?php 
require('db.php')
if(isset($_POST))
{
    if(isset($_POST["libelle_plat"]) && isset($_POST["prix"]))
    {
        $req="INSERT INTO plat(Libelle,PrixPlat,Photo) VALUES('".$_POST["libelle_plat"]."',".$_POST["prix"].",'x')";
        echo $req;
        $test=$bdd->exec($req);
        echo $test;

    }
}
else
{
    echo "échec";
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
    <form action="plat.php" method="POST">
        <h2>Ajouter Plat</h2>
        <div class="flex-form">
            <label for="libellé">Libellé:  <input class="input-admin" type="text" name="libelle_plat" id="libellé_plat"></label>
            <label for="photo">Photo: <input class="input-admin" type="file" name="photo" id="photo" accept ="image/png, image/jpg"></label>
        </div><br>
        <label for="prix">Prix:  <input class="input-admin" type="text" name="prix" id="prix"></label><br>
        <input class="form-button" type="submit" name="button" id="button" value="Envoyer">
    </form>
</div>

</body>
</html>
