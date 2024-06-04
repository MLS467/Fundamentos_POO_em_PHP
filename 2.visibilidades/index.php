<?php
require_once 'Caneta.php';

$c1 = new Caneta();

$c1->modelo = "Bic Cristal";
$c1->cor = 'transparente';
$c1->tampar();
echo "<pre>";
print_r($c1);
echo "</pre>";