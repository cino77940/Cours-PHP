<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>

<body>

    <?php

$prixTTC = "";

$prixHT = $_GET['num1'];
$TVA = 1.2;

$prixTTC = $prixHT * $TVA;
$prixTVA = $prixTTC - $prixHT
?>

<body>
    <h1>Calculatric HT > TTC</h1>
    <form action="#" method="get">
        <input type="number" name="num1" placeholder="Prix HT">
        <input type="submit" value="Calculer !">
    </form>
    <p>Prix TTC : <?php echo $prixTTC; ?>€</p>
    <p>Le Prix HT : <?php echo $prixHT; ?>€</p>
    <p>La montant de la TVA est de : <?php echo $prixTVA ; ?>€</p>


</body>
</html>