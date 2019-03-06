<?php

namespace DesingPatterns\V2\Strategy\Orcamento;

class Orcamento
{
    private $valor;

    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}