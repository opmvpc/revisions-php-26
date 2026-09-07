<?php

echo "Veuillez entrer le prix de l'article : ";
$prix = fgets(STDIN);

echo "L'utilisateur est-il un étudiant ? (oui/non) : ";
$estEtudiant = trim(fgets(STDIN)) == "oui";

// Déterminez le taux de remise ici

// Calculez le prix final ici