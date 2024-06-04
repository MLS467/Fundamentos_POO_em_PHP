<?php
require_once "ex3.php";


$caneta1 = new Caneta("GTA", 7.5);
echo '<pre>';
print_r($caneta1);
echo '</pre>';
echo '<br>';
$caneta1->setModelo('Bic Bolada');
$caneta1->destampar();
$caneta1->setPonta(0.7);
echo '<pre>';
print_r($caneta1);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';

echo $caneta1->getModelo();