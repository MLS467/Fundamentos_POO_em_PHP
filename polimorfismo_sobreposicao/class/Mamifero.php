<?php
require_once "Animal.php";


class Mamifero extends Animal
{

    public string $corPelo;


    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo)
    {
        $this->corPelo = $corPelo;
    }

    public  function locomover()
    {
        echo "<p>Correndo...</p>";
    }
    public  function alimentar()
    {
        echo "<p>Mamando...</p>";
    }
    public  function emitirSom()
    {
        echo "<p>Som de Mamífero</p>";
    }
}