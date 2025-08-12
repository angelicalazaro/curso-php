<?php

// // tableaux multidimensionnels

// $jeu[0] = 'Mario';
// $jeu[3] = 'Les Sims';
// $jeu[1] = 'Zelda';
// $jeu[2] = 'Rayman';

// // echo $jeu[3];

// $mario['type'] = 'plateforme';
// $mario['console'] = 'Nintendo';
// $mario['public'] = 'Tous';

// $jeux['mario']['type'] = 'Plateforme';
// $jeux['mario']['console'] = 'Nintendo';
// $jeux['mario']['public'] = 'Tous';
// $jeux['Zelda']['type'] = 'RPG';
// $jeux['Zelda']['console'] = 'Nintendo';
// $jeux['Zelda']['public'] = 'Adulte';

// // echo $jeux['Zelda']['public'];

// // fonction pour representer les tableaux, echo seul ne suffit pas
// print_r($jeux);

// EXEMPLE TABLEAU MULTID 

// $weapons = [
//   ['whip', 'gun', 'saber'],
//   ['knife', 'shield'],
//   ['belt', 'dagger', 'gun', 'shield'],
// ];


$movies = [
    'Les Aventuriers de l\'arche perdue' => ['Harrison Ford', 'Karen Allen', 'Kate Capshaw', 'Paul Freeman'],
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    'Indiana Jones et la Dernière Croisade' => ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
    'Indiana Jones et le Royaume du crâne de cristal' => ['Harrison Ford', 'Kate Blanchett', 'Shia LaBeouf']
];

foreach ($movies as $title => $actors) {
    echo 'Dans le film ' . $title . ', les principales acteurs sont :' . PHP_EOL; 

    foreach ($actors as $actor) {
        echo '- ' . $actor . PHP_EOL;
    }

    echo PHP_EOL;
}