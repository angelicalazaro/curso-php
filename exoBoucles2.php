<?php
/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture du magasin heure du debut heure du fin une autre plage horaire ou bien "fin"
On demande l'heure et on lui dira si le magasin est ouvert

PSEUDO CODE
On demande à l'utilisateur de rentrer un créneaux
// on demande l'heure du début
// on demande l'heure du fin
// on vérifie que l'heure de début < l'heure du fin 
// on demande si on veut ajouter un nouveau creneaux SI OUI
    // on revient dans la boucle

// on demande à l'utilisateur de rentrer une heure
// on affiche LE MAGASIN EST OUVERT OU FERMÉ 

*/

$creneaux = [];

while (true) {
    $debut = (int)readline('Entrez l\'heure du début du creneaux : ');
    $fin = (int)readline('Entrez l\'heure de fin du creneaux : ');
    if ($debut >= $fin) {
        echo "Le creneau ne peut pas être enregistré car  l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Entrer un nouveau creneaux (n)?');
        if ($action === 'n') {
            break;
        } 
    }
}

// ECHO Le magasin est ouvert de 9h à 12h et de 14h à 18h

echo 'Le magasin est ouvert de ';
// $k c'est l'index
foreach ($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo "{$creneau[0]}h à {$creneau[1]}h";
}

/*
// on demande à l'utilisateur de rentrer une heure
$heure = readline("A quelle heure voulez vous visiter le magasin ?");
// savoir si on a un creneau qui est valable
$creneauTrouve = false;

// parcourir chaquen un de mes creneaux
// $creneau prendra la valeur du premier tableau [0] et ensuite du deuxième [1]
foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera fermé';
}
*/