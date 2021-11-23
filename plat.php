<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');
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
<div class="formulaire">
    <form action="plat.php" method="POST"  class="formulaire">
        <label for="libellé">Libellé:  <input type="text" name="libelle_plat" id="libellé_plat"></label><br>
        <label for="photo">Photo: <input type="file" name="photo" id="photo" accept ="image/png, image/jpg"></label><br>
        <label for="prix">Prix:  <input type="text" name="prix" id="prix"></label><br>
        <input type="submit" name="button" id="button" value="Envoyer">

    </form>
</div>

</body>
</html>
