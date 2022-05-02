<?php
declare(strict_types=1);
session_start();
try
{
    include("db.php");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion</title>
</head>
<body>
<li><a href="index.php">Retour à la page d'accueil</a></li>
<div class="formulaire.css">
    <form action="inscription.php" method="POST">        
        <p><label>Adresse e-mail : <input type="email" name="Email" /></label></p>
        <p><label>Mot de passe: <input type="password" name="password" id="password" placeholder="Ex : ******"/></label></p>
        <p><label>Veuillez répéter votre mot de passe : <input type="password" name="passwordVerif" /></label></p>
        <p><input type="submit" /></p>
    </form>
</div>


<?php 
// Début
if (isset($_POST['Email']))
{
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['Email']);
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['Email']))
    {
        $Email = htmlspecialchars($_POST['Email']);
    }
    else
    {
        echo 'L\'adresse mail ' . $_POST['Email'] . ' n\'est pas valide, recommencez !';
        exit;
    }
}    


// Vérif mdp correspondent.
if (isset($_POST['password']) AND isset($_POST['passwordVerif']))
{
    if (($_POST['password']) != ($_POST['passwordVerif'])) 
    {
        echo 'Les mots de passe ne correspondent pas, veuillez recommencer.';
        exit;
    }
} 
if ((isset($Email)))
    {
        // Vérif si pseudo libre. 
        $reponse = $bdd->query('SELECT email FROM utilisateur WHERE email="'.$Email.'"');

        if (!$reponse)
        {
            ?>
               <p style="color:#FF0000";> Adresse e-mail déjà utilisé, veuillez recommencer </p> 
            <?php
            exit;   
        }
    // On crée l'user
    else
    {
        // On hache
        $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // On insère
        $requete = $bdd->prepare("INSERT INTO utilisateur(email, password) VALUES ( ?, ?)");
        $requete->execute(array($Email, $pass_hache ));
        echo "Utilisateur crée... Redirection...";
        header("Refresh: 2; URL=se_connecter.php"); 
    }
}

?>
<a href="se_connecter.php"> Se connecter </p>