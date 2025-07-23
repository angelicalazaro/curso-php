<?php
$note = readline('Entrez votre note : ');
if ($note >= 10) {
    if ($note == 10) {
        echo 'Vous avez juste la moyenne';
    } else {
        echo 'Bravo, vous avez la moyenne'; 
    }
 
} else {
    echo 'Dommage, vous n\'avez pas la moyenne';
}
?>;

<?php
// This code prompts its simplified version
$note2 = readline('Entrez votre note : ');
if ($note2 > 10) {
    echo 'Bravo, vous avez la moyenne';
} elseif ($note == 10){
    echo 'Vous avez juste la moyenne';
} else {
    echo 'Dommage, vous n\'avez pas la moyenne';
}
// Use the === operator for strict comparison instead of ==, use also (int)$note2 to ensure $note2 is treated as an integer
$note3 = (int)readline('Entrez votre note : ');
if ($note3 > 10) {
    echo 'Bravo, vous avez la moyenne';
} elseif ($note3 === 10){
    echo 'Vous avez juste la moyenne';
} else {
    echo 'Dommage, vous n\'avez pas la moyenne';
}
