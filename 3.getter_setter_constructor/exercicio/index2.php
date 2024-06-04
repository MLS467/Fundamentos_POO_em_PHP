<?php
require_once "./Termica.php";


$termica = new Termica('Termolar', 'Cinza', 'rosca', 1, true);
$termica->setCheia(false);
$termica->setModelo('Mor');

echo "<pre>";
print_r($termica);
echo "</pre>";