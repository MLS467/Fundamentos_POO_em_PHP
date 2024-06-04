<?php
require_once "Animal.php";


class Mamifero extends Animals
{
    protected string $corPelo;

    public function emitirSom()
    {
        echo "<p>Som de Mamifero</p>";
    }

    public function getCorPelo(): string
    {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo)
    {
        $this->corPelo = $corPelo;
    }
}