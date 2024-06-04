<?php

abstract class Animal
{
    protected float $peso;
    protected int $idade;
    protected int $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function getMembros(): int
    {
        return $this->membros;
    }

    public function setMembros(int $membros)
    {
        $this->membros = $membros;
    }
}