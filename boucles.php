<?php
/* $chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez une chiffre : ');
}
echo 'Bravo, vous avez gagné'; */

/*
for ($i = 0; $i < 10; $i++) {
    echo "- $i \n";
}
*/

/* $notes = [10, 15, 16];
$eleves = [
    'cm2' => 'Jean',
    'cm1' => 'Marc'
];
// this code shows the student of each classe with the $eleve key :

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
} */

// this code want to separate information for this array: 
$eleves = [
    'cm2' => ['Jean', 'Clothilde', 'Jane', 'Marion'],
    'cm1' => ['Marc', 'Titouan', 'Emilie', 'Marcelin']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
// this code takes the $listEleves like an array for show each student separately : 
    foreach ($listEleves as $eleve){
        echo "- $eleve \n";
    }
    echo "\n";
}