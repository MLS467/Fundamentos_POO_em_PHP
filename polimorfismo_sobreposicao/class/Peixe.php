<?php
require_once "Animal.php";

class Peixe extends Animal
{
    private string $corEscama;


    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

    public function soltaBolhas()
    {
        echo "<p>Soltou Bolhas</p>";
    }

    public  function locomover()
    {
        echo "<p>Nadando...</p>";
    }
    public  function alimentar()
    {
        echo "<p>Comendo substâncias</p>";
    }
    public  function emitirSom()
    {
        echo "<p>Peixe não emite som!</p>";
    }
}