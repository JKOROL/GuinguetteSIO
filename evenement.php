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
        $req="INSERT INTO evenement (NomEvent , NomOrganisateur, nbParticipant) VALUES('".$_POST["NomEvent"]."','".$_POST["NomOrganisateur"]."',".$_POST["nbParticipant"].")";
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

    <link rel="stylesheet" href="css/formulaire-sibel.css">

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

    <div class="two-form">

        <div class="form-1">
            <div class="formulaire-creat-event">
            <form action="evenement.php" method="POST">
            <div class="title">New Event</div>
            <div class="subtitle">Formulaire de création d'évenement</div>
            <div class="input-container ic1">
                <input id="NomEvent" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="NomEvent" class="placeholder">Nom evenement</label>
            </div>
            
            <div class="input-container ic2">
                <input id="NomOrganisateur" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="NomOrganisateur" class="placeholder">Organisateur</>
            </div>
                
            <div class="input-container ic2">
                <input id="date" class="input" type="date" min="2021-03-01" max="2031-01-01" placeholder=" " />
            </div>
                
            <div class="input-container ic2">
                <input id="date" class="input" type="time" name="appt" min="09:00" max="18:00" placeholder=" " />
            </div>
                
            <div class="input-container ic2">
                <input id="nbParticipant" class="input" type="number" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="nbParticipant" class="placeholder">Nombre de participant</>
            </div>
                
                
            <button type="text" class="submit">Ajouter</button>

        </div>

        <div class="form-2">
            <div class="formulaire-list-event">
                <div class="title">List Event</div>
                <div class="subtitle">Tous les évenements</div>

                <div class="input-container-list ic1" style="background-color:#eee;border-radius:20px;margin:10px">
                    <div style="margin-left:20px;padding-top:10px;padding-bottom:10px" class="inputList">
                        Nom de l'évenement : <br>
                        Organisateur : <br>
                        Date : <br>
                        Heur : <br>
                        Nombre de participant :
                       
                        <div class="delete-icon" style="justify-content:end; display:flex;margin-right:20px;"><img style="height:20px; cursor:pointer" src="images/poubelle.png"></div>
                    </div>
                </div>
            </div>
                
        </div>
           

        </div>
    </div>

    </div>


</div>
<?php echo $req; ?>

</body>
</html>
