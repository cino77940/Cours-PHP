<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
</head>
<body>

<form action="#" method="get">
    <input type="text" name="compte" placeholder="Saisir">
    <input type="submit" value="Resultat">


</form>


<?php

$compte = $_GET[ "compte"];

switch($compte){
    case "Abonné":
        echo "<br/>Vous êtes un abonné";
    break;

    case "Modérateur":
        echo "<br/>Vous êtes modo";
    break;

    case "Administrateur":
        echo "<br/>Vous êtes administrateur";
    break;

    default:
        echo "<br/>Vous n’êtes pas connecté";
}

?>

</body>
</html>