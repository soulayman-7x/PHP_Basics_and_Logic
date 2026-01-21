<?php
function saluer() {
    echo "Bonjour tout le monde !";
}
saluer();

echo "<br> <br>";


function addition($a, $b) {
    return $a + $b;
}
echo "Somme : " . addition(5, 10);

echo "<br> <br>";


function bienvenue($nom = "visiteur") {
    echo "Bienvenue " . $nom;
}
bienvenue(); // Affiche "Bienvenue visiteur"

echo "<br> <br>";

$compteur = 0;

function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo $compteur;
}
incrementer(); // Affiche 1
incrementer(); // Affiche 2
incrementer(); 
incrementer();  
