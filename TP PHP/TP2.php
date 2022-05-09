<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>
<body>

<?php

$valB = $_GET ['valA'];
$valA = $_GET ['valB'];
$valTemp = $valA;
$valB = $_GET ['valTemp'];

?>

<form action="#" method="get">
        <input type="text" name="valTemp" placeholder= "valA"> 
        <input type="text" name= "valB" placeholder="valB">

        <input type="submit" value="Switch !">

        <p>valA: <?php echo $valTemp; ?></p>
        <p>valB: <?php echo $valB; ?></p>

    
</body>
</html>