<?php
// Challenge
// Poings, fouet, pistolet

// Indiana Jones a beaucoup d'adversaires. Pour les combattre il utilise souvent ses poings, son fouet ou son pistolet.

// Afin de choisir la meilleure défense, tu dois écrire un petit script PHP qui va se baser sur celui-ci :

$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.


// TODO


$indyWeapon = '???';

// Les règles du jeu sont les suivantes :

//     le pistolet bat le poing mais perd contre le fouet
//     le poing bat le fouet mais perd contre le pistolet
//     le fouet bat le pistolet mais perd contre le poing

// Le programme doit donc assigner une arme à la variable $indyWeapon. Cette arme doit être meilleure que celle de l'adversaire.