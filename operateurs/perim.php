<?php
echo "Entrez la longueur (cm) : ";
$long = readline();

echo "Entrez la largeur (cm) : ";
$larg = readline();

$perimetre = ($long + $larg) * 2;
$aire = $long * $larg;
echo "Périmètre = " . $perimetre . " cm" . PHP_EOL;
echo "Aire = " . $aire .  " cm²" . PHP_EOL;
