<?php

interface Publicacao
{

    public function abrir();
    public function fechar();
    public function folhear(int $pag);
    public function avancarPag();
    public function voltarPag();
}