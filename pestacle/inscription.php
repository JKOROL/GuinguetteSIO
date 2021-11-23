<?php 
$bdd = new PDO('mysql:host=localhost;dbname=theatre;charset=utf8','root','');
if(isset($_POST["button"]))
{
    if(isset($_POST))
    {
        
        $annee = date("Y");
        $req=$bdd->query("SELECT AnneeN FROM abonne WHERE IdAbonne = " .$_POST["ingredient0"]);
        $donnee = $req -> fetch();
        $annee = intval($annee);
        $new = intval($donnee[0]);
        if($annee-$new>= 18){
            echo "majeur";
        }
    }
    else
    {
        echo "ça marche pas";
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
    



<form action="inscription.php" method="POST">
    <select name="plat" id="plat">
        <?php
        $plats=$bdd->query("SELECT IdSpectacle, Titre FROM spectacle");
        while($row=$plats->fetch())
        {
            echo "<option value='".$row[0]."'>".$row[1]."</option>";
        }
        
        ?>
    </select>
    <div id="Ingredients">
        <select name="ingredient0" id="ingredient0">
            <?php
            $ingredients=$bdd->query("SELECT IdAbonne, NomA FROM abonne");
            while($row=$ingredients->fetch())
            {
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
            ?>
        </select>
    </div>
    <input type="submit" name="button" id="button" value="Envoyé">

</form>
</body>
</html>
