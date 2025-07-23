<?php
$heure = (int)readline('Entrez une heure : ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Lemagasin sera fermé';
}

/*
rappel opérateurs logiques : 

VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUT = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX

Exercice inversion : le && deviens un || et le < devient un >

$heure = (int)readline('Entrez une heure : ');

if ((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
    echo 'Le magasin sera fermé';
} else {
    echo 'Lemagasin sera ouvert';
}