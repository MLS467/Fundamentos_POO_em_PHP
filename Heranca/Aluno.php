<?php
require_once "Pessoa.php";

class Aluno extends Pessoas
{

    private int $matricula;
    private string $curso;

    public function __construct(int $matricula, string $curso)
    {
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function Teste()
    {
        $this->matricula = 4545;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula(int $matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso(string $curso)
    {
        $this->curso = $curso;
    }
}