<?php
require_once "Lobo.php";


class Cachorro extends Lobo
{
    public function emitirSom()
    {
        echo "<p>Au! Au! Au! Au!</p>";
    }

    public function reagirFrase($frase)
    {
        if (str_contains($frase, "Olá") or str_contains($frase, "Comida")) {
            echo "<p>Abanar o rabinho!</p>";
        } else {
            echo "<h2>Rosnar</h2>";
        }
    }
    public function reagirHora(int $hora)
    {
        if ($hora < 12) {
            echo "<p>Abanando...</p>";
        } else if ($hora < 18) {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Ignorar</p>";
        }
    }


    public function reagirDono(bool $dono)
    {
        if ($dono) {
            echo "<p>Abanar para dono</p>";
        } else {
            echo "<p>rosnar e latir</p>";
        }
    }


    public function reagirIdadePeso(int $idade, string $peso)
    {
        if ($idade < 8 && str_contains($peso, "Leve")) {
            echo "<p>Abanar I/P</p>";
        } else if ($idade < 8 && str_contains($peso, "Pesado")) {
            echo "<p>Latir I/P</p>";
        } else if ($idade < 18 && str_contains($peso, "Leve")) {
            echo "<p>Rosnar I/P</p>";
        } else {
            echo "<p>Ignorar I/P</p>";
        }
    }
}