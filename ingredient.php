<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');
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
    <title>Document</title>
</head>
<body>
    

<li><a href="backoffice.php">Retour au back office</a></li>
<div class="formualire">
    <form action="ingredient.php" method="POST"  class="formulaire">
        <label for="libellé">Libellé:  <input type="text" name="libelle_ingredient" id="libellé_ingredient"></label><br>
        <input type="submit" name="button" id="button" value="Envoyer">

    </form>
</div>

</body>
</html>
