<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    public function rabiscar()
    {
        if ($this->tampada) {
            echo "ERRO";
        } else {
            echo "RABISCANDO";
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }
    private function destampar()
    {
        $this->tampada = false;
    }
}