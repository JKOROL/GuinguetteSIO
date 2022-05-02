<?php 
session_start();

 try
 {
     $bdd = new PDO('mysql:host=localhost;dbname=guinguette', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
    <img class ="background" src ="images/hero-bg.jpg">

    <nav class="nav-bar">
        <div class="div-nav-bar">
        <ul class="list-nav-bar">
            <li><a  href="index.php" title="home">Accueil</a></li>
            <li><a  href="animation.php" title="animation">Animation</a></li>
            <li><a  href="carte.php" title="menu">Menu</a></li>
            <li><a  href="#works" title="partenaire">Partenaire</a></li>
            <li><a  href="#contact" title="contact">Contact</a></li>
        </ul>
        </div>
    </nav>
    <div class="">
            <a href="index.php">
                <img class="home-logo" src="images/logo.png" alt="Homepage">
            </a>
    </div>     
       
    <div class="se_connecter"> Se connecter </div>
        <form method="post" action="se_connecter.php">
            <div class="formulaire">
                <p> <label for="email">Adresse mail <input type="email" name="email" id="email" placeholder="guigui@hotmail.fr"/></label> </p>
                <p> <label for="mdp">Mot de passe <input type="password" name="password" id="password" placeholder="*********"/></label> </p>   
                <p> <label for="resteco">Se souvenir de moi ? </label><input type="checkbox" name="resteco" id="resteco" /> </p>
                <div class="text_center"> 
                    <div class="submit">
                        <p><input type="submit" value="Se connecter" /></p>
                    </div> 
                </div>   
                    <p><a href="formulaire_mdp.php" style="text-decoration : none;color:  black;"> Mot de passe oublié ? </a></p>
                    
                    <p><a href="inscription.php" style="text-decoration : none;color:  black;"> Pour s'inscrire c'est ici ! </a></p>   
                </div>  
            </div>
        </form>

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
            echo 'Connexion réussie, prends donc place..'.
                '<a href="index.php"> index </a>';
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
