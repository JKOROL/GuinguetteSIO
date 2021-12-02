<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguettesio-main;charset=utf8','root','');
if(isset($_POST))
{
    if(isset($_POST["libelle_ingredient"]))
    {
        $req="INSERT INTO ingredient(Libelle) VALUES('".$_POST["libelle_ingredient"]."')";
        echo $req;
        $test=$bdd->exec($req);
        echo $test;

    }
}
else
{
    echo "echec";
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
    
<ul class="black-office">
    <li>
        <a href="backoffice.php" class="black-office">Retour au back office</a>
    </li>
</ul>
<a href="index.php" class="link-logo">
    <img class="home-logo" src="images/logo.png" alt="Homepage">
</a>
<div class="formualire">
    <form action="ingredient.php" method="POST"  class="formulaire">
        <h2>Ajouter un Ingrédient</h2>
        <label for="libellé">Libellé:  <input class="input-admin" type="text" name="libelle_ingredient" id="libellé_ingredient"></label><br>
        <input class="form-button" type="submit" name="button" id="button" value="Envoyer">

    </form>
</div>

</body>
</html>
