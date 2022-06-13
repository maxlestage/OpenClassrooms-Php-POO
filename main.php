<?php

// $dateUne = new DateTime;
// $dateDeux = $dateUne;

// $dateDeux->modify('+100 year');

// var_dump($dateUne, $dateDeux);
// // echo $dateDeux->format('d/m/Y'); 
// // $dateUne et $dateDeux désignent le même objet en mémoire.
// // Ils sont donc tous les deux au lendemain

// $date = new DateTime;
// echo $date->format('d/m/Y');



// D’abord, l’exemple sans chaînage :
$date = new DateTime;
$newDate = $date->modify('+1 day');

echo $date->format('d/m/Y') . PHP_EOL, 'Je suis 1 ';
echo $newDate->format('d/m/Y') . PHP_EOL,  'Je suis 2 ';

// Maintenant avec le chaînage. Nous exploitons directement
// l'objet qui nous est retourné sans le stocker dans une variable :
$formatedDate = $date->modify('+23 day')->format('d/m/Y');
echo $formated . PHP_EOL,  'Je suis 3 ';

$s = '
{
    "date":"2021-03-23 07:35:44.011207",
    "timezone_type":3,
    "timezone":"Europe/Paris"
}
';

var_dump(($s));
