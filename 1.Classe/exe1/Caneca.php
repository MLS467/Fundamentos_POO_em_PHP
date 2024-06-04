<?php

class Caneca
{

    function __construct(
        public string $cor,
        public float $capacidade,
        public string $modelo,
        public bool $vazia
    ) {
    }

    public function beber()
    {
        if ($this->vazia) {
            echo "Não tem nada pra beber!";
        } else {
            echo "Bebendo...";
            $this->esvaziar();
        }
    }

    public function encher()
    {
        $this->vazia = false;
    }

    public function esvaziar()
    {
        $this->vazia = true;
    }
}