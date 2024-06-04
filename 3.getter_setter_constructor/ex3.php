<?php

class Caneta
{
    public string $modelo;
    private float $ponta;
    private bool $tampada;

    function __construct($modelo, $ponta)
    {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->tampar();
    }


    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {

        $this->tampada = false;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta(float $ponta)
    {
        if ($ponta > 0) {
            $this->ponta = $ponta;
        } else {
            echo "ERRO NUMERO DE PONTA INVÁLIDO!";
        }
    }
}