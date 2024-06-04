<?php
require_once "Animal.php";

class Reptil extends Animal
{
    private string $corEscama;

    public function getCorEscama(): string
    {
        return $this->corEscama;
    }

    public function setCorEscama(string $corEscama)
    {
        $this->corEscama = $corEscama;
    }

    public  function locomover()
    {
        echo "<p>Rastejando...</p>";
    }
    public  function alimentar()
    {
        echo "<p>Comendo insetos</p>";
    }
    public  function emitirSom()
    {
        echo "<p>Som de Reptil</p>";
    }
}