<?php
// Demande à l'utilisateur de saisir le premier nombre
echo "Entrez le premier nombre : ";
$premierNombre = readline();

echo "Entrez le deuxième nombre : ";
$deuxiemeNombre = readline();

$somme = $premierNombre + $deuxiemeNombre;
echo "Résultat = " . $somme;
