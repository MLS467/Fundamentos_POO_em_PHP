<?php
require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao
{
    private Gafanhoto $espectador;
    private Video $filme;


    public function __construct(Gafanhoto $gafanhoto, Video $filme)
    {
        $this->espectador = $gafanhoto;
        $this->filme = $filme;
        $this->filme->setView($this->filme->getView() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }


    public function avaliarV()
    {
        $this->filme->setAvaliacao($this->filme->getAvaliacao() + 5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc)
    {
        $nota = 0;
        if ($porc <= 20) {
            $nota = 2;
        } else if ($porc <= 50) {
            $nota = 5;
        } else if ($porc <= 85) {
            $nota = 8;
        } else {
            $nota = 10;
        }

        $this->filme->setAvaliacao($nota);
    }

    public function getEspectador(): Gafanhoto
    {
        return $this->espectador;
    }

    public function setEspectador(Gafanhoto $espectador)
    {
        $this->espectador = $espectador;
    }

    public function getFilme(): Video
    {
        return $this->filme;
    }

    public function setFilme(Video $filme)
    {
        $this->filme = $filme;
    }
}