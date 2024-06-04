<?php
require_once "Lutador.php";
require_once "Luta.php";
echo "<pre>";



$vetLutador = [];

$vetLutador[0] = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
$vetLutador[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
$vetLutador[2] = new Lutador("SnapShadow", 'EUA', 35, 1.65, 80.9, 12, 2, 1);
$vetLutador[3] = new Lutador('Dead  Code', 'Australia', 28, 1.93, 81.6, 13, 0, 2);
$vetLutador[4] = new Lutador('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
$vetLutador[5] = new Lutador('Nerdaart', 'EUA', 30, 1.81, 105.7, 12, 2, 4);


$luta = new Luta($vetLutador[5], $vetLutador[4]);
$luta->Lutar();



print_r($vetLutador[5]->apresentar());
echo "<br>";
print_r($vetLutador[4]->apresentar());





echo "</pre>";