<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');
if(isset($_POST["button"]))
{
    if(isset($_POST))
    {
        foreach($_POST as $index)
        { 
            if(!($index==$_POST['plat'] || $index=="Envoyé"))
            {
                $req="INSERT INTO utiliseg(IdGroupe,IdTable) VALUES(".$index.",".$_POST["plat"].")";
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
    <title>Document</title>
</head>
<body>
    



<form action="utilisec.php" method="POST">
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
    <input type="submit" name="button" id="button" value="Envoyé">

</form>
<button id="AjoutIngredient">Ajouter un ingredient</button>
<script src="composerplat.js"></script>
</body>
</html>
