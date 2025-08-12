<?php

// // fonctions utiles pour les tableaux

// $weapons = ['whip', 'gun', 'saber'];
// echo count($weapons) . "\n";

// echo rsort($weapons) . "\n";

// echo asort($weapons) . "\n";

// echo arsort($weapons) . "\n";

// echo ksort($weapons) . "\n";

// echo krsort($weapons) . "\n";

// // in_array() => verifie la presence d'une valeur dans un tableau

// var_dump(in_array('whip', $weapons)); //bool(true)
// var_dump(in_array('shield', $weapons)); //bool(false)

$movies = [
    'Les Aventuriers de l\'arche perdue' => 1981,
    'Indiana Jones et le Temple maudit' => 1984,
    'Indiana Jones et la Dernière Croisade' => 1989,
    'Indiana Jones et le Royaume du crâne de cristal' => 2008
];
// trier par ordre decroissant
arsort($movies, SORT_NUMERIC);

// boucler sur chaque entree et donner la cle pour titre, afficher l'annee suivi d'une tiree et puis le titre de chaque film
foreach ($movies as $title => $year) {
    echo $year . ' - ' . $title . "\n";
}

