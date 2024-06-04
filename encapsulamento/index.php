<?php
require_once "Controle_remoto.php";


echo "<pre>";
$controle = new Controle_remoto();
$controle->ligar();
$controle->maisVolume();
$controle->maisVolume();



print_r($controle);

echo "</pre>";