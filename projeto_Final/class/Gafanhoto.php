<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa
{
    private bool $login;
    private int $totAssistido;

    public function __construct(string $nome, int $idade, string $sexo, bool $login, int $totAssistido)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = $totAssistido;
    }



    public function ganharExperiencia()
    {
        $this->setExperiencia($this->getExperiencia() + 10);
    }

    public function viuMaisUm()
    {
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    // Getter e Setter para login
    public function isLogin(): bool
    {
        return $this->login;
    }

    public function setLogin(bool $login): void
    {
        $this->login = $login;
    }

    // Getter e Setter para totAssistido
    public function getTotAssistido(): int
    {
        return $this->totAssistido;
    }

    public function setTotAssistido(int $totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }
}