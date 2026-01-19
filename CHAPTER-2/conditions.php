<?php

// Etape : 01
$age = 20;
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

echo "<br>";

// Etape : 02

$note = 13;
if ($note >= 16) {
    echo "Très bien";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Échec";
}

echo "<br>";

// Etape : 03

$jour = "Vendredi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;

    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;

    default:
        echo "Jour normal";
}

