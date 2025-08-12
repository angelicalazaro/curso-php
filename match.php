<?php

$jour = readline('Entrez votre action : ("lundi", "mercredi", "vendredi") ');"  ";

$message = match ($jour) {
    "lundi"    => "Courage, c’est le début de la semaine.",
    "mercredi" => "C’est le milieu de la semaine.",
    "vendredi" => "Presque le week-end !",
    default    => "Jour non spécifié."
};

echo $message;