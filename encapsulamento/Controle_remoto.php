<?php

require_once "Controlador.php";

class Controle_remoto implements Controlador
{
    // ATRIBUTOS
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    // MÉTODO CONSTRUTOR
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // MÉTODOS ACESSORES GETTER E SETTER 

    private function mostraVolume()
    {
        echo "Volume ";
        for ($i = 0; $i <= $this->volume; $i += 10) {
            if ($i >= 10)
                echo " | ";
        }
        echo $i - 10 . '%';
        echo "<br>";
    }

    private function getVolume()
    {

        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    // MÉTODOS DA INTERFACE
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        if ($this->getLigado()) {
            $this->setLigado(false);
        }
    }
    public function abrirMenu()
    {
        if ($this->getLigado()) {
            echo "Menu Aberto <br>";
        }
    }
    public function fecharMenu()
    {
        if ($this->getLigado()) {
            echo "Menu Fechado <br>";
        }
    }
    public function maisVolume()
    {
        if ($this->getLigado() and $this->getVolume() < 100) {
            $this->setVolume($this->getVolume() + 10);
        }
        $this->mostraVolume();
    }
    public function menosVolume()
    {
        if ($this->getLigado() and $this->getVolume() >= 10) {
            $this->setVolume($this->getVolume() - 10);
        }
        $this->mostraVolume();
    }
    public function ligarMudo()
    {
        if ($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() and $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getLigado() and !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() and $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}