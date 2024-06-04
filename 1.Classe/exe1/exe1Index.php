<?php
require_once "Caneca.php";


$caneca = new Caneca('transparente', 250, 'barata', true);

var_dump($caneca);

echo "<br>";
$caneca->encher();
var_dump($caneca);
echo "<br>";
$caneca->beber();
echo "<br>";
var_dump($caneca);
echo "<br>";
$caneca->beber();