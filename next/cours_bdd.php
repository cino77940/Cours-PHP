<?php
$server = "localhost";
$username = "usertest";
$password = "123456";
$dbname = "nextformation";

$bdd = mysqli_connect($server, $username, $password, $dbname);

if(!$bdd)
    die("Vous n'etes pas connecté");

    echo "Vous etes connecté";


?>