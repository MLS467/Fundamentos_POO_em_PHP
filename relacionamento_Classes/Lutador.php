<?php

class Lutador
{
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;


    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    public function apresentar()
    {
        echo "<p>------------------------</p><br>";
        echo "Atenção acabou de chegar o Lutador " . $this->nome . "<br>";
        echo "com " . $this->idade . " anos e altura de " . $this->altura . "m e com o Peso de " . $this->peso . "Kg, Na categoria " . $this->categoria . "<br>";
        echo "com o total de  " . $this->vitorias . " vitórias,  " . $this->derrotas . " derrotas e " . $this->empates . " empates<br>";
        echo "<p>------------------------</p><br>";
    }
    public function status()
    {
        echo "<p>Nome: " . $this->nome . " Altura: " . $this->altura . " Peso:" . $this->peso . "<br>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() - 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }


    // GETTER E SETTER

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso(float $peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            echo "Peso inválido <br>";
        } else if ($this->peso <= 70) {
            $this->categoria = "Peso Leve";
        } else if ($this->peso < 95) {
            $this->categoria = "Peso Médio";
        } else if ($this->peso < 120) {
            $this->categoria = "Peso Pesado";
        } else if ($this->peso > 120) {
            echo "Peso inválido <br>";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}