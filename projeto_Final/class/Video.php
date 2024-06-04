<?php
require_once "AcoesVideo.php";

class Video implements AcoesVideo
{

    private string $titulo;
    private float $avaliacao;
    private int $view;
    private int $curtidas;
    private bool $reproduzindo;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
        $this->reproduzindo = false;
        $this->curtidas = 0;
        $this->avaliacao = 0;
        $this->view = 0;
    }

    public function Play()
    {
        if (!($this->isReproduzindo())) {
            $this->setReproduzindo(true);
        }
    }
    public function Pause()
    {
        if ($this->isReproduzindo()) {
            $this->setReproduzindo(false);
        }
    }
    public function Like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    //getters e setters

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAvaliacao(): float
    {
        return $this->avaliacao;
    }

    public function setAvaliacao(float $avaliacao): void
    {
        $media = ($this->getAvaliacao() + $avaliacao) / $this->getView();
        $this->avaliacao = $media;
    }

    // Getter e Setter para view
    public function getView(): int
    {
        return $this->view;
    }

    public function setView(int $view): void
    {
        $this->view = $view;
    }

    // Getter e Setter para curtidas
    public function getCurtidas(): int
    {
        return $this->curtidas;
    }

    public function setCurtidas(int $curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    // Getter e Setter para reproduzindo
    public function isReproduzindo(): bool
    {
        return $this->reproduzindo;
    }

    public function setReproduzindo(bool $reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }
}