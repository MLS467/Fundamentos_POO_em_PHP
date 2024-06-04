<?php
require_once "Aluno.php";


class Bolsista extends Aluno
{

    private bool $bolsa = true;

    public function renovarBolsa()
    {
        echo "Bolsa renovada";
    }

    public function pagarMensalidade()
    {
        echo "<p>Pagar mensalidade com desconto</p><br>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa(bool $bolsa)
    {
        $this->bolsa = $bolsa;
    }
}