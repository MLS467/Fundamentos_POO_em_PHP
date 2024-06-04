<?php
require_once "Animal.php";


class Ave extends Animal
{

    private string $corPena;

    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }
    public function fazerNinho()
    {
        echo "<p>Ninho feito!</p>";
    }
    public  function locomover()
    {
        echo "<p>Voando...</p>";
    }
    public  function alimentar()
    {
        echo "<p>Insetos e frutas</p>";
    }
    public  function emitirSom()
    {
        echo "<p>Som de Aves</p>";
    }
}