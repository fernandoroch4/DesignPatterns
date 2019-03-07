<?php

namespace DesingPatterns\V2\Strategy\Orcamento;

use DesingPatterns\V2\ChainOfResponsability\Desconto\Item;

class Orcamento
{
    private $valor;
    private $itens = [];

    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function adicionarItem(Item $item)
    {
        $itens[] = $item;
    }
}