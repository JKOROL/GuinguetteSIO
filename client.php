
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');

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

$filtre_dispo ="SELECT `IdTable`,`NbSiege` FROM `tablerestaurant` WHERE disponible = 1";
$test_dispo = $bdd->query($filtre_dispo);
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
<li><a href="backoffice.php">Retour au back office</a></li>
<div class="formulaire">
    <form action="client.php" method="POST">
        <p>
            <label for="nom"> Nom: <input type="text" name="nom" id="nom" required></label>
            <label for="tel"> Telephone: <input type="text" name="tel" id="tel" required></label> 
        </p><!-- règle de gestion à ajouter pour numéro de telephone -->
        <p><br>
            <label for="NbClient"> Nombre de Client:  <select name="NbClient" id="NbClient">
            <?php
                $compteur = 1;
                for( $compteur; $compteur<20; $compteur++){
                echo  "<option value =".$compteur.">".$compteur."</option>";
                }
                
            ?></select></label>
            <label for="NbVehicule"> Nombre de Véhicule: <select name="NbVehicule" id="NbVehicule">
            <?php
            $compteur = 1;
            for( $compteur; $compteur<20; $compteur++){
                echo  "<option value =".$compteur.">".$compteur."</option>";
            }
            
            ?></select></label>
        </p><br>
        <p>
            <label for="NbHandi"> Nombre d'Handicapé: <select name="NbHandi" id="NbHandi">
            <?php
            $compteur = 0;
            for( $compteur; $compteur<20; $compteur++){
                echo  "<option value =".$compteur.">".$compteur."</option>";
            }
            
            ?></select></label>
            <label for="Allergene"> Allergie: <input type="text" name="Allergene" id="Allergene"></label>
        </p><br>
        <div id="Table">
            <label for="IdTable"> Numéro de table :</label> 
            <select name="IdTable" id="IdTable"> <!--Disponible = 1 | indisponible = 0--> 
            <?php
                while($row=$test_dispo->fetch())
                {
                    echo "<option value =".$row[0].">".$row[0]. " - ".$row[1]." places </option>";
                }
            ?></select>
        </div>
        <input type="button" id="AjoutTable" value="+"></input>
        <input type="button" id="SuppTable" value="-"></input>
        <input type="submit" name="button" id="button" value="Envoyer">
    </form>

</div>


<script src="client.js"></script>
</body>
</html>
