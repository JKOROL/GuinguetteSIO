<?php 
include('db.php');
if(isset($_POST["button"]))
{
    if(isset($_POST))
    {
        foreach($_POST as $index)
        { 
            if(!($index==$_POST['plat'] || $index=="Envoyé"))
            {
                $req="INSERT INTO composei(IdIngredient,IdPlat) VALUES(".$index.",".$_POST["plat"].")";
                echo $req;
                $test=$bdd->exec($req);
            }
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

    <link rel="stylesheet" href="css/formulaire.css">

    <title>Document</title>
</head>
<body>
<?php require("backoffice.php"); ?>
<a href="index.php" class="link-logo">
    <img class="home-logo" src="images/logo.png" alt="Homepage">
</a>
<div class="formulaire">
    <h2>Composer un Plat</h2>
    <form action="composerplat.php" method="POST">
        <div class="flex-form">
            <select name="plat" id="plat">
                <?php
                $plats=$bdd->query("SELECT IdPlat,Libelle FROM plat");
                while($row=$plats->fetch())
                {
                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }
                ?>
            </select>
            <div id="Ingredients">
                <select name="ingredient0" id="ingredient0">
                    <?php
                    $ingredients=$bdd->query("SELECT * FROM ingredient");
                    while($row=$ingredients->fetch())
                    {
                        echo "<option value='".$row[0]."'>".$row[1]."</option>";
                    }
                    ?>
                </select>
            </div>
        </div><br>
        <div class="plus-moin">
            <input type="button" id="AjoutIngredient" value="+"></input>
            <input type="button" id="SuppIngredient" value="-"></input>
        </div>
        <input class="form-button" type="submit" name="button" id="button" value="Envoyer">
    </form>

</div>


<script src="composerplat.js"></script>
</body>
</html>
