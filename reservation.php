<?php 
include('db.php');

if(isset($_POST["button"]))
{
    if(isset($_POST))
    {
        $req="INSERT INTO client (Nom,Telephone , NbClient, NbVehicule, NbPHandi,Allergene) VALUES('".$_POST["nom"]."','".$_POST["tel"]."',".$_POST["NbClient"].",".$_POST["NbVehicule"].",".$_POST["NbHandi"].",'".$_POST["Allergene"]."')";
        $test=$bdd->exec($req);
        
        $req_client_dispo="SELECT `IdClient` FROM `client` WHERE nom = '".$_POST["nom"]."' AND Telephone = '".$_POST["tel"]."'";
    
        $test_client_dispo = $bdd->query($req_client_dispo);
        $test_client_dispo = $test_client_dispo -> fetch();        
        
        foreach($_POST as $index)
        { 
            if(!($index==$_POST['nom'] || $index==$_POST['tel'] || $index==$_POST['NbClient'] || $index==$_POST['NbVehicule'] || $index==$_POST['NbHandi'] || $index==$_POST['Allergene'] ||$index=="Envoyé"))
            {
                $req_table="INSERT INTO utilisec(IdClient,idTable) VALUES(".$test_client_dispo[0].",".$index.")";
                $req_update_dispo = "UPDATE tablerestaurant SET Disponible = 0 WHERE IdTable = ".$_POST["IdTable"]."";
                $bdd->exec($req_table);
                $bdd->exec($req_update_dispo);
            }
        }
    }
    else
    {
        echo "ça marche pas";
    }
    
}

$filtre_dispo ="SELECT `IdTable`,`NbSiege` FROM `tables` WHERE disponible = 1";
$test_dispo = $bdd->query($filtre_dispo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/formulaire.css">

     <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>Document</title>
</head>
<body>

<?php require("backoffice.php"); ?>
<div class="le_tout">
    <a href="index.php" class="link-logo">
        <img class="home-logo" src="images/logo.png" alt="Homepage">
    </a>
    <div class="formulaire">
        <h2>Formulaire de Réservation Client</h2>
        <form action="client.php" method="POST">
            <p>
                <label for="nom"> Nom: <input class="input-admin" type="text" name="nom" id="nom" required></label>
                <label for="tel"> Telephone: <input class="input-admin" type="text" name="tel" id="tel" required></label> 
            </p><!-- règle de gestion à ajouter pour numéro de telephone -->
            <p><br>
                <label for="NbClient"> Nombre de Client:</label>
                <input type="number" name="NbClient" id="NbClient" class="input-number" value="1">
                <label for="NbVehicule"> Nombre de Véhicule:</label>
                <input type="number" name="NbVehicule" id="NbVehicule" class="input-number" value="0">
            </p><br>
            <p>
                <label for="NbHandi"> Nombre d'Handicapé:</label>
                <input type="number" name="NbHandi" id="NbHandi" class="input-number" value="0">
                <label for="Allergene"> Allergie: <input class="input-admin" type="text" name="Allergene" id="Allergene"></label>
            </p><br>
            <div id="Table">
                <label for="IdTable"> Numéro de table :</label> 
                <select name="IdTable" id="IdTable0"> <!--Disponible = 1 | indisponible = 0--> 
                <?php
                    while($row=$test_dispo->fetch())
                    {
                        echo "<option value =".$row[0].">".$row[0]. " - ".$row[1]." places </option>";
                    }
                ?></select>
            </div><br>
            <div class="plus-moin">
                <input type="button" id="AjoutTable" value="+"></input>
                <input type="button" id="SuppTable" value="-"></input>
            </div>
            <input class="form-button" type="submit" name="button" id="button" value="Envoyer">
        </form>
    </div>
</div>
                
<script src="js/modernizr.js"></script>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
<script src="reservation.js"></script>
</body>
</html>
