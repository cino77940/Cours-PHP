<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3</title>
</head>
<body>
    
<form action="#" method="get">
    <input type="number" name="result" placeholder="saisir un chiffre">
    <input type="submit" value=Resultat>     
</form>

<?php

$seuil=100;
$result= $_GET["result"]* 3;
$result2= $_GET["result"] / $seuil;


if($_GET[ "result"] < 100){
echo "</br> La personne à $result points";
}

elseif($_GET[ "result"] >= $seuil){
    echo "<br/> Le joueur à $result2 points";
}

?>



    
</body>
</html>