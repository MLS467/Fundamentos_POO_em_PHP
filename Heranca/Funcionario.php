<?php
require_once "Pessoa.php";


class Funcionario extends Pessoas
{
    private string $setor;
    private bool $trabalhando;

    public function __construct(string $setor, bool $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor(string $setor)
    {
        $this->setor = $setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando(bool $trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(string $novoTrab)
    {
        $this->setSetor($novoTrab);
    }
}