<?php
$prenom = 'Angelica';
$nom = 'Lazaro';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2;
// Calculating the average of two notes for the first student
echo 'Bonjour ' ,"$prenom $nom" ,' vous avez eu ' . (($note1 + $note2) / 2) . " de moyenne.\n";

// Interpolation of variables in a string
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne.\n";
?>