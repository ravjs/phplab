<?php


    // Exo 1
    $options = array(2=>1, 1=>0, 0=>7 ) ;  // tableau associatif

    $num = 0; // Initialisation de la variable num

    $couleur_defaut = 'vert' ; 
    $couleur = 'vert' ;

    $var = 'num';

    //$num
    $$var = ($couleur == $couleur_defaut) ? 1 : 2; // Comparaison ternaire // retourne 2
    //$num devient : 2

    //die("stop");
    echo $options[$num]; // $options[2] donne 1
    //localhost/phplab/exo1.php

?>