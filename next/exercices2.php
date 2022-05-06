<?php 
    /*
        Avec la boucle for, afficher tous les nombres pairs de 0 à 50 (inclu)
    */
    for($NombresPairs = 0; $NombresPairs <= 50; $NombresPairs = $NombresPairs + 2){
        echo "<br/>Voici les nombres pairs : $NombresPairs";
    }


    /*
        Avec la boucle for, afficher tous les nombres impairs de 0 à 88 (inclu)
    */

    for($NombresImpairs = 1; $NombresImpairs <= 88; $NombresImpairs = $NombresImpairs + 2){
        echo "<br/>Voici les nombres impairs : $NombresImpairs";
    }


    /*
        Avec la boucle while, afficher tous les nombres pairs de 0 à 50 (inclu)
    */
    $NombresPairs = 0;
    while( $NombresPairs <= 50){
        echo "<br/>Voici les nombres pairs : $NombresPairs";
        $NombresPairs = $NombresPairs + 2;
    }

    /*
        Avec la boucle while, afficher tous les nombres impairs de 0 à 88 
    */
    $NombresImpairs = 1;
    while( $NombresImpairs <= 88){
        echo "<br/>Voici les nombres impairs : $NombresImpairs";
        $NombresImpairs = $NombresImpairs + 2;
    }


?>