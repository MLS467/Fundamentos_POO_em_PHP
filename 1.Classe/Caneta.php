<?php

class Caneta
{
    public string $modelo;
    public string $cor;
    public float $ponta;
    public int $carga;
    public bool $tampada;


    function rabiscar()
    {
        if ($this->tampada) {
            echo "ERRO";
        } else {
            echo "RABISCANDO";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada = false;
    }
}