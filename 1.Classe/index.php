<?php
require_once 'Caneta.php';

$c1 = new Caneta();

$c1->modelo = 'bic';
$c1->cor = 'azul';
$c1->ponta = 0.5;
$c1->carga = 100;
$c1->tampada = true;
$c1->rabiscar();

echo "<br>";

$c2 = new Caneta();
$c2->modelo = 'Tesla';
$c2->cor = 'Verde';
$c2->ponta = 0.7;
$c2->carga = 50;
$c2->tampada = false;
$c2->rabiscar();
echo "<br>";
$c2->tampar();
$c2->rabiscar();
echo "<br>";

print_r($c1);
echo "<br>";
print_r($c2);