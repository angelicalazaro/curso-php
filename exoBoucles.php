<?php
/*
Demande à l'utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
à la fin on affiche le tableau de notes sous forme de liste
*/

/* pseudo code
TANT QUE l'utilisateur ne tape pas "fin"
 // on ajoute la note tapée dans le tableau $notes
POUR CHAQUE note DANS notes
 // ON AFFICHE "- note"
*/

$notes = [];

$saisie = null;

while ($saisie !== 'fin'){
    $notes[] = $saisie ;
    $saisie = readline('Veuillez rentrer une note ou taper fin pour finir la tâche :'); 
} 

echo "Les notes sont les suivantes :\n";

foreach($notes as $index => $note) {
    echo "- Note " . ($index + 1) . " : " . $note . "\n";
}
