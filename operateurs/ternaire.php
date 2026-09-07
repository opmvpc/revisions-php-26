<?php

echo "Donne un nbr pls";
$nombre = readline();

$message = $nombre % 2 === 1 ? "Impair" : "Pair";
echo $message;
