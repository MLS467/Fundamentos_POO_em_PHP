<?php
require_once "./Pessoa.php";
require_once "./Publicacao.php";

class Livro implements Publicacao
{
    private string $titulo;
    private string $autor;
    private int $totalPaginas;
    private bool $aberto = false;
    private int $pagAtual;
    private Pessoa $leitor;

    public function __construct(string $titulo, string $autor, int $totalPaginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->pagAtual = 0;
    }

    public function detalhes()
    {
        echo "<div class='div'>";
        echo  "<p>Título: " . $this->getTitulo() . "</p>";
        echo  "<p>Autor: " . $this->getAutor() . "</p>";
        echo "<p>Total de Páginas: " . $this->getTotalPaginas() . "</p>";
        echo "<p>Aberto: " . ($this->getAberto() == true ? "Verdadeiro" : "Falso") . "</p>";
        echo " <p>Leitor: " . $this->getLeitor()->getNome() . "</p>";
        echo "</div>";
    }

    // MÉTODOS DA INTERFACE PUBLICAÇÃO

    public function abrir()
    {
        if ($this->getLeitor()) {
            $this->setAberto(true);
        } else {
            echo "Sem Leitor<br>";
        }
    }
    public function fechar()
    {
        if ($this->aberto && $this->getLeitor()) {
            $this->setAberto(false);
        } else
            echo "Sem Leitor<br>";
    }
    public function folhear(int $pag)
    {
        if ($this->aberto && $this->getLeitor()) {
            $this->setPagAtual($pag);
        } else
            echo "Sem Leitor<br>";
    }
    public function avancarPag()
    {
        if ($this->getLeitor() && $this->getAberto()) {
            if ($this->getPagAtual() < $this->getTotalPaginas())
                $this->setPagAtual($this->getPagAtual() + 1);
            else
                echo "Final do Livro";
        } else {
            echo "Sem Leitor ou livro fechado<br>";
        }
    }
    public function voltarPag()
    {
        if ($this->getAberto() && $this->getLeitor()) {
            if ($this->getPagAtual() > 0) {
                $this->setPagAtual($this->getPagAtual() - 1);
            } else {
                echo "Inicio do livro!<br>";
            }
        } else {
            echo "Sem Leitor ou livro fechado<br>";
        }
    }

    // GETTERS E SETTERS

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    public function setTotalPaginas(int $totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual(int $pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        // $res = $this->aberto == true ? "Verdadeiro<br>" : "Falso<br>";
        // echo $res;
        return $this->aberto;
    }

    private function setAberto(bool $aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor(Pessoa $leitor)
    {
        $this->leitor = $leitor;
    }
}