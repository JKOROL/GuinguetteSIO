<?php 
// require('db.php')

// if(isset($_POST)){
//     if(isset($_POST["button"]))
// {
//     $req="INSERT INTO evenement (idEvent, NomEvent , NomOrganisateur, nbParticipant VALUES('".$_POST["idEvent"]."','".$_POST["NomEvent"]."',".$_POST["NomOrganisateur"].",".$_POST["nbParticipant"]."')";
//     $test=$bdd->exec($req);
            
// }
// }


require("db.php");

if(isset($_POST["button"]))
{
    if(isset($_POST))
    {
        $req="INSERT INTO evenement (NomEvent , NomOrganisateur, nbParticipant VALUES('".$_POST["NomEvent"]."',".$_POST["NomOrganisateur"].",".$_POST["nbParticipant"]."')";
        $test=$bdd->exec($req);
                
        
        // $req_client_dispo="SELECT `IdClient` FROM `client` WHERE nom = '".$_POST["nom"]."' AND Telephone = '".$_POST["tel"]."'";
    
        // $test_client_dispo = $bdd->query($req_client_dispo);
        // $test_client_dispo = $test_client_dispo -> fetch();        
        
        // foreach($_POST as $index)
        // { 
        //     if(!($index==$_POST['nom'] || $index==$_POST['tel'] || $index==$_POST['NbClient'] || $index==$_POST['NbVehicule'] || $index==$_POST['NbHandi'] || $index==$_POST['Allergene'] ||$index=="Envoyé"))
        //     {
        //         $req_table="INSERT INTO utilisec(IdClient,idTable) VALUES(".$test_client_dispo[0].",".$index.")";
        //         $req_update_dispo = "UPDATE tablerestaurant SET Disponible = 0 WHERE IdTable = ".$_POST["IdTable"]."";
        //         $bdd->exec($req_table);
        //         $bdd->exec($req_update_dispo);
        //     }
        // }
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
        <h2>Formulaire de création d'événement</h2>
        <form action="evenement.php" method="POST">
            <p>
                <label for="NomEvent"> Nom: <input class="input-admin" type="text" name="NomEvent" id="NomEvent" required></label>
                <label for="NomOrganisateur"> Organisateur: <input class="input-admin" type="text" name="NomOrganisateur" id="NomOrganisateur" required></label> 
            </p>
            <p><br>
                <label for="nbParticipant"> Nombre de participant:</label>
                <input type="number" name="nbParticipant" id="nbParticipant" class="input-number" value="1">
            </p><br>
            <br>
            <input class="form-button" type="submit" name="button" id="button" value="Ajouter">
        </form>
    </div>
</div>

</body>
</html>
