<?php

$server = "localhost";
$username = "usertest";
$password = "123456";
$dbname = "clients";


$bdd = mysqli_connect($server, $username, $password, $dbname);

if(!$bdd)
    die("Vous n'êtes pas connecté");
?>