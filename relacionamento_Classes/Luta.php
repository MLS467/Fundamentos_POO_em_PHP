<?php
require_once "Lutador.php";


class Luta
{
    private Lutador $desafiado;
    private Lutador $desafiante;
    private int $rounds;
    private bool $aprovada;

    public function __construct(Lutador $desafiado, Lutador $desafiante)
    {
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;
        $this->setAprovada(false);
        $this->marcarLuta();
    }

    private function marcarLuta()
    {
        if (($this->desafiante != $this->desafiado) and ($this->desafiante->getCategoria() == $this->desafiado->getCategoria())) {
            $this->setAprovada(true);
        } else {
            $this->setAprovada(false);
            echo "<br><br>Os lutadores são iguais ou a categoria é diferente!<br>";
        }
    }

    public function Lutar()
    {
        $res = rand(0, 2);

        if ($this->getAprovada()) {
            echo "<br><---DESAFIANTE<br><br>";
            $this->desafiante->apresentar();
            echo "<br><---DESAFIADO<br><br>";
            $this->desafiado->apresentar();
            echo "<br><------------<br><br>";

            $round = rand(1, 15);
            $this->setRounds($round);
            echo "NUMERO DE ROUNDS " . $this->rounds . "<br><br>";

            if ($res == 1) {
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                echo "<br><br>VITORIA DO " . $this->desafiado->getNome() . "<br><br>";
            } else if ($res == 2) {
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                echo "<br><br>VITORIA DO " . $this->desafiante->getNome() . "<br><br>";
            } else {
                $this->desafiante->empatarLuta();
                $this->desafiado->empatarLuta();
                echo "<br><br>EMPATE ENTRE " . $this->desafiante->getNome() . " E " . $this->desafiado->getNome() . "<br><br>";
            }
        } else {
            echo "<br><br>A luta não foi aprovada!<br>";
        }
    }

    // GETTEsR E SETTERs

    public function getAprovada()
    {
        $res = $this->aprovada == true ? "<br><br>Luta Aprovada!<br><br>" : "<br><br>Luta Não Aprovada!<br><br>";
        echo $res . "<br>";
        return $this->aprovada;
    }

    private function setAprovada(bool $apro)
    {
        $this->aprovada = $apro;
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado(Lutador $desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante(Lutador $desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }
}