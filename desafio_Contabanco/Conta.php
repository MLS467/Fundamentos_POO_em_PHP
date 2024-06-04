<?php

class ContaBanco
{
    public int $numConta;
    protected string $tipo;
    private string $dono;
    private float $saldo = 0;
    private bool $status = false;


    function __construct(int $numConta, string $tipo, string $dono, float $saldo = 0)
    {
        $this->$numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = $saldo;

        if ($this->tipo == 'cc') {
            $this->saldo += 50;
        }
        if ($this->tipo == 'cp') {
            $this->saldo += 150;
        }
    }


    public function abrirConta()
    {
        $this->setStatus(true);
    }

    public function fecharConta()
    {
        if ($this->status and $this->saldo == 0 and !($this->saldo < 0)) {
            $this->setStatus(false);
        } else {
            echo "A conta não deve possuir saldo e não pode estar negativada!";
        }
    }
    public function depositar(float $valor)
    {
        if ($valor > 0 and $this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "Valor inválido ou conta está fechada!";
        }
    }
    public function sacar(float $valor)
    {
        $testaValor = $this->getSaldo() - $valor;
        if ($testaValor >= 0 and $this->status) {
            $this->setSaldo($testaValor);
        } else {
            echo "Valor inválido ou conta está fechada!";
        }
    }
    public function pagarMensalidade()
    {

        $mensal = 0;

        if ($this->getStatus()) {

            if ($this->tipo == 'cc') {
                $mensal = 12;
            }

            if ($this->tipo == 'cp') {
                $mensal = 20;
            }

            $this->setSaldo($this->getSaldo() - $mensal);
        } else {
            echo "Conta está fechada!";
        }
    }

    public function setNumConta(int $numConta)
    {
        if ($this->getStatus()) {
            $this->$numConta = $numConta;
        }
    }

    public function setTipo(string $tipo)
    {
        if ($this->status) {
            $this->tipo = $tipo;
        }
    }

    public function setDono(string $dono)
    {
        if ($this->status) {
            $this->dono = $dono;
        }
    }

    public function setSaldo(float $saldo)
    {
        if ($this->status) {
            $this->saldo = $saldo;
        }
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }
}