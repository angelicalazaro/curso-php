<?php
$eleve = [
    'nom' => 'Lazaro', 
    'prenom' => 'Angelica', 
    'notes' => [10, 20, 15]
];
// replace the name 
$eleve['prenom'] = 'Marie';
// adding a new note
$eleve['notes'][3] = 18;
// Displaying the student's full name
//echo $eleve['prenom'] . ' ' . $eleve['nom'];
// Displaying the array of notes
//print_r($eleve['notes']);
// An array in an array
$classe = [
    [
        'nom' => 'Lazaro', 
        'prenom' => 'Angelica', 
        'notes' => [10, 20, 15]
    ],
    [
        'nom' => 'Dupont', 
        'prenom' => 'Jean', 
        'notes' => [12, 14, 16]
    ],
    [
        'nom' => 'Martin', 
        'prenom' => 'Sophie', 
        'notes' => [18, 19, 17]
    ]
];
// displaying second student's first note
print_r($classe[1]);