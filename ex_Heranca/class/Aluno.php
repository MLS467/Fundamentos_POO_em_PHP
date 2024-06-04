<?php
require_once "Pessoa.php";


class Aluno extends Pessoa
{

    public function __construct(
        private int $matricula,
        private string $curso
    ) {
    }

    public function pagarMensalidade()
    {
        echo "<br><p>Mensalidade Paga</p><br>";
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

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}