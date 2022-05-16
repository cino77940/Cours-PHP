<?php
$server = "localhost";
$username = "usertest";
$password = "123456";
$dbname = "nextformation";

$bdd = mysqli_connect($server, $username, $password, $dbname);

if(!$bdd)
    die("Vous n'etes pas connecté");

//     echo "Vous etes connecté";


// $sql = "INSERT INTO users(prenom_user) VALUES('userphp')";

// if(!mysqli_query($bdd, $sql))
// die("erreur: ".mysqli_error($bdd));

// echo "Utilisateur ajouté à la base de données";

$message = null;
if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $prepare = mysqli_prepare ($bdd, "INSERT INTO users(prenom_user, nom_user, mail_user) VALUES(?, ?, ?)");

    mysqli_stmt_bind_param($prepare, "sss", $prenom, $nom, $mail);

    if(!mysqli_stmt_execute($prepare))
            die('Erreur');

    $message = "Utilisateur ajouté à la base de données";
    
}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
    <input type="text" name="nom" placeholder="Saisir votre nom">
    <input type="text" name="prenom" placeholder="Saisir votre prenom">
    <input type="text" name="mail" placeholder="Saisir votre mail">
    <input type="submit" valeur ="Envoyer"> 
</form>
<p><?php echo $message; ?></p>
</body>
</html>