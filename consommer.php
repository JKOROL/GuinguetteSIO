<?php 
require("db.php");
if(isset($_POST["envoyer"]))
{
    echo "INSERT INTO consommer (IdPlat, IdReservation, Quantité) VALUES (".substr($_POST["plat"],1).",".$_POST["reservation"].",".$_POST["quantite"].")";
    if($_POST["plat"][0] == "p")
    {
        $ajoutplat=$bdd->exec("INSERT INTO consommer (IdPlat, IdReservation, Quantité) VALUES (".substr($_POST["plat"],1).",".$_POST["reservation"].",".$_POST["quantite"].")");
    } elseif ($_POST["plat"][0] == "m") {
        $ajoutplat=$bdd->exec("INSERT INTO choisir (IdMenu, IdReservation, Quantité) VALUES (".substr($_POST["plat"],1).",".$_POST["reservation"].",".$_POST["quantite"].")");
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
    <?php 
        $reservation = $bdd->query("SELECT reserver.IdReservation, Nom, IdTable FROM reservation INNER JOIN reserver WHERE reservation.IdReservation = reserver.IdReservation");
        $plats=$bdd->query("SELECT IdPlat,Libelle FROM plat");
        $menu=$bdd->query("SELECT IdMenu, Nom FROM menu");
    ?>
    <form action="consommer.php" method="POST">
        <select name="reservation" id="reservation">
            <?php
                while($row=$reservation->fetch())
                {
                    echo "<option value='".$row[0]."'>".$row[2]." - ".$row[1]."</option>";
                }
            ?>
        </select>
        <select name="plat" id="plat"><?php
            while($row=$plats->fetch())
            {
                echo "<option value='p".$row[0]."'>".$row[1]."</option>";
            }
            while($row=$menu->fetch())
            {
                echo "<option value='m".$row[0]."'>".$row[1]."</option>";
            }
        ?></select>
        <br>
        <label for="quantite">Quantité <input type="number" name="quantite" value="0"></label>
        <br>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>
</html>