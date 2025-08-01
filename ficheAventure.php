<?php

$nom = "   indiana jones   ";
$specialite = "archéologue";
$arme = "fouet";
$description = "héros légendaire,   chasseur de trésors et professeur.";
$phraseCulte = "ça, c'est une mauvaise idée !";

// Nettoyer le nom avec trim() et le formater avec ucwords().
$cleanName = ucwords(trim($nom));
echo $cleanName;
// Mettre la phrase culte en majuscules.

// Compter le nombre total de caractères dans la description (en version multi-octets).

// Remplacer "fouet" par "fouet en cuir" dans l'arme.

//Afficher la spécialité en majuscules, sans accents (bonus).

// Transformer la description en liste de mots (avec explode) et l'afficher avec une virgule entre chaque mot (implode).
