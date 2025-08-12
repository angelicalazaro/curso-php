<?php

// Style de programation ou les 2 parties d'une expression d'egalite sont inversees dans une condition, l'idee c'est d'eviter de mettre l'operateur d'assignation = entant qu'operateur de comparaison (==)

$count = 1;
if ($count = 5) {
    echo 'Condition remplie';
} else {
    // echo 'Condition non remplie'; affiche true car on a reasigne 5 a la variable alors qu'avec la condition on veut faire une comparaison
}

// $count = 1;
// if (5 = $count) {
//     // echo 'Condition remplie';
// } else {
//    // echo 'Condition non remplie'; // affiche un erreur de parsing
// }
