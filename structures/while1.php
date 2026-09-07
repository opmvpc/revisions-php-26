<?php

echo "Veuillez entrer un nombre entier positif : ";
$nombre = intval(fgets(STDIN));

// Vérifiez si le nombre est positif ici
if ($nombre < 1) {
    echo "Recommence c'est pas un entier positif!!!";
    exit();
}

// Initialisez la somme et le compteur
$somme = 0;
$compteur = 1;

// // Utilisez une boucle while pour calculer la somme
while ($compteur <= $nombre) {
    $somme += $compteur;
    $compteur++;
}
// $somme = ($nombre * ($nombre + 1)) / 2;

// Affichez la somme calculée
echo "Résultat = $somme";
