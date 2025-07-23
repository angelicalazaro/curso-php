<?php
$action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');

switch ($action) {
    case 1:
        echo 'J\attaque !';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
}

/*
if ($action === 1) {
    echo 'j\attaque';
} elseif ($action === 2) {
    echo 'je défends';
} elseif ($action === 3) {
    echo 'je passe mon tour';
} else {
    echo 'Commande inconnue';
}
*/