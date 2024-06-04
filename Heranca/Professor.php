<?php
require_once "Pessoa.php";

class Professor extends Pessoas
{
    private string $especialidade;
    private float $salario;

    public function __construct(string $especialidade, float $salario)
    {
        $this->especialidade =  $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($aumento)
    {
        $this->setSalario($this->getSalario() + $aumento);
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