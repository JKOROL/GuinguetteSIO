<?php 
session_start();

 try
 {
     include("db.php");
     require_once("header_connexion.php");
 }
 catch (Exception $e)
 {
         die('Erreur : ' . $e->getMessage());
 }
?>  
<!DOCTYPE html>
<html lang="fr" class="background_connexion">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion</title>
</head>

    <body>
        <a href="index.php">
            <img class="home-logo" src="images/logo.png" alt="Homepage">
        </a>
        <div class="se_connecter"> Connectez-vous afin de profiter de nos services </div>
        <div class="formulaire">
            <!-- zone de connexion -->
            <form method="post" action="connexion.php">
                <label>Adresse email* :</label>
                <input type="text" placeholder="Saisir l'adresse email" name="email" required>
                <label>Mot de passe* :</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value='Envoyer'></input> 
                <a href="formulaire_mdp.php" style="text-decoration : none;color:  black;"> Mot de passe oublié ? </a> </br></br>
                <a href="inscription.php" style="text-decoration : none;color:  black;"> Pour s'inscrire c'est ici ! </a>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
                
        </div>
    </body>

<footer>
    <div class="footer_text_left"> 
        Sibel - Jovick - Baptiste - Jonathan  - Adam - William </p>
    </div> 
    <div class="footer_text_right"> 
        <p> Une production SLAM  2021 - 2022 
    </div>
</footer>

    <?php 
    //  Récupération de l'utilisateur et de son pass hashé
    if ((isset($_POST['email'])) AND (isset($_POST['password'])))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $req = $bdd->prepare('SELECT idUtilisateur, email, password FROM utilisateur WHERE email = :email');
    if (isset($_POST['email']))
    {
        $req->execute(array(
        'email' => $email));
        echo $email;
    }
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    if ((isset($_POST['password'])) AND (isset($resultat['password'])))
    {
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
    }
    if (isset($resultat) AND (!$resultat) AND (isset($_POST['password'])))
    {
        echo '<div class="text_center"> Mauvais identifiant ou mot de passe ! (error 1)</div>';
    } 
    else
    {
        if (isset ($isPasswordCorrect) AND ($isPasswordCorrect))
        {
            $_SESSION['idUtilisateur'] = $resultat['idUtilisateur'];
            echo 'Connexion réussie, prends donc place..';
            header("Refresh: 2; URL=index.php");
        }

        elseif (isset($_POST['Pwd']))
        {
            echo 'Mauvais identifiant ou mot de passe ! (error 2)';
            exit;
        }
    }


    // On garde les données si c'est demandé
    if (isset($_POST['resteco']))
    {
        $resteco = $_POST['resteco'];
    }
    if (isset ($resteco) AND ($resteco))
    {
    // COOKIE a INSERER ICI  
    // setcookie ('Pseudo', $Pseudo, time() + 365*24*3600,  null, null, false, true); // On écrit un cookie, true étant HtmlOnly afin d'éviter hack XSS
    }
    ?>
