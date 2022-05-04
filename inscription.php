<?php
declare(strict_types=1);
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
<html lang="en" class="background_connexion">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Inscription</title>
</head>
<body>
    <a href="index.php">
        <img class="home-logo" src="images/logo.png" alt="Homepage">
    </a>
    <div class="inscription_entete"> S'inscrire </div>
    <div class="formulaire">
        <form action="inscription.php" method="POST">        
            <label>Adresse e-mail* : <input type="text" name="Email" /></label>
            <label>Mot de passe* : <input type="password" name="password" id="password" placeholder="Ex : ******"/></label>
            <label>Veuillez répéter votre mot de passe* : <input type="password" name="passwordVerif" /></label>
            <?php    
                $sql = ("SELECT * FROM questions_secretes");
                $stmt = $bdd->query($sql);
                $listQst = $stmt->fetchAll(PDO::FETCH_ASSOC);         
            ?>
            <div class= "">
                <label>Merci de choisir une question secrète* : <select id="qst_secrete"><option value=""> Questions </option>
                <?php 
                    foreach($listQst as $curQst){
                        echo "<option value='".($curQst["idQuestion"])."'";
                        echo ">".$curQst["libQuestion"]."</option>";
                    }
                ?>
                </select></label>   
                <div id="rep_secrete">
                    <label>Réponse à la question* :</label>
                    <input type="text" name ="rep_question"></input>
                </div>
                <input type="submit"></input>   
                <a href="connexion.php" style="color: black;"> Se connecter </a>
            </div>  
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
if (isset($_POST["rep_question"])){
    $repQuestion = htmlspecialchars($_POST["rep_question"]);
    if (empty($repQuestion)){
        echo "La réponse à la question ne doit pas recevoir de caractère spécial.";
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
        if (isset($Email) AND (isset($password)) AND (isset($repQuestion)))
        {
            // On hache
            $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // On insère
            $requete = $bdd->prepare("INSERT INTO utilisateur(email, password, repQuestion, questionSec) VALUES ( ?, ?, ?, ?)");
            $requete->execute(array($Email, $pass_hache, $repQuestion, $idQuestion));
            echo "Utilisateur crée... Redirection...";
            header("Refresh: 2; URL=connexion.php"); 
        }
        else {
            echo "Erreur lors de la création, veuillez recommencer";
        }
    }
?>
<footer>
    <div class="footer_text_left"> 
        Sibel - Jovick - Baptiste - Jonathan  - Adam - William </p>
    </div> 
    <div class="footer_text_right"> 
        <p> Une production SLAM  2021 - 2022 
    </div>
</footer>
<script>
let qst_secrete = document.getElementById("qst_secrete");
let rep_secrete = document.getElementById("rep_secrete");
qst_secrete.addEventListener("click",() => {
    if(getComputedStyle(rep_secrete).display != "block"){
    rep_secrete.style.display = "block";
    ;
}
})
</script>