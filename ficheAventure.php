<?php

$nom = "   indiana jones   ";
$specialite = "archéologue";
$arme = "fouet";
$description = "héros légendaire,   chasseur de trésors et professeur.";
$phraseCulte = "ça, c'est une mauvaise idée !";

// Nettoyer le nom avec trim() et le formater avec ucwords().
$cleanName = ucwords(trim($nom));
echo $cleanName . PHP_EOL;
// Mettre la phrase culte en majuscules.
echo strtoupper($phraseCulte) . PHP_EOL;
// Compter le nombre total de caractères dans la description (en version multi-octets).
echo mb_strlen($description) . PHP_EOL;
// Remplacer "fouet" par "fouet en cuir" dans l'arme.
echo str_replace("fouet", "fouet en cuir", $arme) . PHP_EOL;
//Afficher la spécialité en majuscules, sans accents (bonus).
$specialiteSansAccents = strtr($specialite, ['é' => 'e']);
echo $specialiteSansAccents . PHP_EOL;
// Transformer la description en liste de mots (avec explode) et l'afficher avec une virgule entre chaque mot (implode).

$mots = explode(" ", $description);
print_r($mots);

echo implode(",", $mots);