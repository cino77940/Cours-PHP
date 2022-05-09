<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5</title>
</head>
<body>
    
</body>
</html>

    <form action="#" method="POST">
    <label for="table">Table de multiplication : </label>
    <input type="number" name="table" id="table" placeholder="Saisir une valeur">
    <input type="submit" value="Valider">
    </form>
    <?php


    if(isset($_POST["table"])){
        echo "<h3> La table de ". $_POST["table"] . "</h3>";
        for($i = 1; $i <= 10 ; $i++){
            echo $i . " * ". $_POST["table"] . " = ". $i * $_POST["table"] . "<br/>";
        }
    }
        ?>

    