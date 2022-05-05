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
        <div class="mdp_oubli">Mot de passe oublié ?</div>
        <div class="formulaire">
            <!-- zone de connexion -->
            <form method="post" action="formulaire_mdp.php">
                <label>Adresse e-mail* :</label>
                <?php echo "<input type='text'";
                if (isset($_POST["email"])){
                    echo "value='".$_POST['email']."'";
                }
                echo "placeholder='Veuillez saisir votre adresse e-mail' name='email'  required>";
                if (isset($_POST["email"]))
                {
                    $sql = ('SELECT * FROM utilisateur INNER JOIN questions_secretes WHERE Email="'.$_POST["email"].'" AND idQuestion = questionSec');
                    $stmt = $bdd->query($sql);
                    $curQst = $stmt->fetch(PDO::FETCH_ASSOC);    
                    if ($curQst){
                        echo "<label>".$curQst['libQuestion']." :</label>";
                        echo "<input type='text'";
                        if (isset($_POST["reponseQuestion"])){
                            echo "value='".$_POST['reponseQuestion']."'";
                        }
                        echo  "placeholder='Saisir votre réponse' name='reponseQuestion' required>";            
                    }
                }
                ?>
                
                <?php
                if (isset($_POST["reponseQuestion"])){
                    if ($_POST["reponseQuestion"] = $curQst["repQuestion"]){
                        echo "<p style='color:green'>Bonne réponse !</p>";
                        $accordChange = 1;
                    }
                    if ($accordChange = 1){
                        echo "<label>Nouveau mot de passe* : <input type='password' name='password' id='password' placeholder='Ex : ******'/></label>
                        <label>Veuillez répéter votre mot de passe* : <input type='password' name='passwordVerif' /></label>";
                    }
                    else  echo "<div class='text_error'>Mauvaise réponse, veuillez réessayer.</div>";
                    }
                ?>
                <input type="submit" id='submit' value='Envoyer'></input> 
                <a href="connexion.php" style="text-decoration : none;color:  black;"> Se connecter ? </a> </br></br>
                <a href="inscription.php" style="text-decoration : none;color:  black;"> Pour s'inscrire c'est ici ! </a>
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
    if (isset($_POST["reponseQuestion"])) {
        $reponseQuestion = ($_POST["reponseQuestion"]);
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
    // Vérif mdp correspondent.
    if (isset($_POST['password']) AND isset($_POST['passwordVerif']))
    {
        if (($_POST['password']) != ($_POST['passwordVerif'])) 
        {
            echo "<div class='text_error'>Erreur : </br> Les mots de passe ne correspondent pas, veuillez recommencer.</div>";
            exit;
        }
         // On hache
         $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
         // On insère
         $requete = $bdd->query('UPDATE `utilisateur` SET `password` = "'.$pass_hache.'" WHERE Email="'.$_POST["email"].'"');
         echo "<div class='text_reussi'>Utilisateur modifié... Redirection...</div>";
         header("Refresh: 2; URL=connexion.php"); 
    }
    if (isset($curQst) AND (!$curQst)) {
        echo "<div class='text_error'>Adresse e-mail introuvable, veuillez réessayer.</div>";
    } 
    ?>
