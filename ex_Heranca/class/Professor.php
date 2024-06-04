<?php
require_once "Pessoa.php";

class Professor extends Pessoa
{

    private string $especialidade;
    private float $salario;

    public function __construct(string $especialidade, float $salario)
    {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento(float $aum)
    {
        $this->setSalario($this->getSalario() + $aum);
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }
}