<?php 
    /*
        Objectifs du jour :
            - Les boucles
            - Les inclusions de fichier
            - Les fonctions
            - La manipulation de formulaires
            - L'upload de fichier
    */

    /*
        Les boucles : 
            - for (pour)
            - while (tant que)
            - do..while (répéter, tant que)
            - foreach (pour chaque)
    */

    /*
        Incrémentation et la décrémentation
    */
    $i = 10;
    $i = $i + 1; // 11 (incrémentation)
    $i = $i - 1; // 10 (décrémentation)

    $i++; // incrémentation (11)
    $i--; // décrémentation (10)

    /*
        La boucle for : 
        for(variable de compteur; condition; modification de la variable de compteur){
            // Faire quelque chose
        }
    */

    /*
        Comment faire pour afficher sur la page web tous les nombres de 1 à 10 ?
    */
    for($i = 1; $i <= 10; $i++){
        // echo "<br/>Voici la valeur de i : $i";
    }

     /*
        Comment faire pour afficher sur la page web 1 nombre sur 4 de 1 à 100?
    */
    for($i = 1; $i <= 100; $i = $i + 4){
        echo "<br/>Voici la valeur de i : $i";
    }


     /*
        Comment faire pour afficher sur la page web 1 nombre sur 4 de 1 à 100?
    */
    for($i = 1; $i <= 100; $i = $i + 4){
        echo "<br/>Voici la valeur de i : $i";
    }

    $i = 1;
    while( $i <= 100 ){
        echo "<br/>Voici la valeur de i : $i";
        $i = $i + 4;
    }

?>