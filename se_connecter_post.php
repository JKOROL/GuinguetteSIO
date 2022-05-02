<?php 
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
    <link rel="stylesheet" href="css/formulaire.css">
    <title>Connexion</title>
</head>
<body>

<?php

$req = $bdd->query("SELECT email, password FROM utilisateurs WHERE email = $_POST["email"] AND password = $_POST["password"]");

   # $requetebdd = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES (:pseudo, :message)'); #On prépare la table à remplir
   # $requetebdd->execute(array(   # On défini les variables qui remplissent la table
     #    'pseudo' => $_POST['pseudo'],
    #    'message' => $_POST['message'],
     #   ));                                    --> Les lignes ci-dessus fonctionnent tout aussi bien, celles du dessous étant la correction officielle
  //   $requetebdd= $bdd->prepare('INSERT INTO utilisateurs (email, password) VALUES(?, ?)');
  //   $requetebdd->execute(array($_POST['password'], $_POST['mdp']));
  
  
     //   setcookie('pseudo', $donnees['Pseudo'], time() + 365*24*3600, null, null, false, true);
    # $requetebdd = $bqq->query("SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'"); #On peut filtrer entre 2 dates 
    # INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW()) --> NOW = la date du moment donc le + utile
        

header('Location:se_connecter.php');