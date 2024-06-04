<?php

abstract class Pessoa
{

    private string $nome;
    private int $idade;
    private string $sexo;

    public function __construct(string $nome, int $idade, string $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public final function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
    }
}