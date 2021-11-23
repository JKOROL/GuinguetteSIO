
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=theatre;charset=utf8','root','');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form action="index.php" method="POST">
    <label for="nom"> Nom: <input type="text" name ="nom"></label>
    <label for="prenom"> Prenom: <input type="text" name ="prenom"></label><br>
    <label for="naissance"> Année de Naissance: <input type="date" name ="naissance"></label><br>
    <input type="submit" name="button" id="button" Value ="Envoyer">
</form>

<?php 

if(isset($_POST))
{
    if(isset($_POST["nom"]))
    {
        $req="INSERT INTO abonne (NomA, PrenomA,AnneeN) VALUES('".$_POST["nom"]."', '".$_POST["prenom"]."', '".$_POST["naissance"]."')";
        echo $req;
        $test=$bdd->exec($req);
        echo $test;

    }
}
else
{
    echo "echec";
}

?>