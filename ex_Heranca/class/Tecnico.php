<?php
require_once "Aluno.php";


class Tecnico extends Aluno
{
    public int $registroProf;

    public function praticar()
    {
        echo "Praticando....<br>";
    }

    public function getRegistroProf()
    {
        return $this->registroProf;
    }

    public function setRegistroProf($reg)
    {
        $this->registroProf = $reg;
    }
}