<?php
require_once "Conta.php";

$numConta = 0;

$jubileu = new ContaBanco($numConta++, 'cc', 'Jubileu', 300);
$creusa = new ContaBanco($numConta++, 'cp', 'Creusa', 500);

echo "<pre>";
$jubileu->abrirConta();



echo "<br>";
print_r($jubileu);


echo "<br>";

$creusa->abrirConta();
$creusa->sacar(100);

echo "<br>";
print_r($creusa);
echo "</pre>";