<?php

class Termica
{
    function __construct(
        private string $modelo,
        private string $cor,
        private string $tipo,
        private int $capacidade,
        private bool $cheia,
    ) {
    }

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }
    public function setCor(string $cor)
    {
        $this->cor = $cor;
    }
    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
    }
    public function setCapacidade(int $capacidade)
    {
        $this->capacidade = $capacidade;
    }
    public function setCheia(bool $cheia)
    {
        $this->cheia = $cheia;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getCapacidade()
    {
        return $this->capacidade;
    }
    public function getCheia()
    {
        return $this->cheia;
    }
}