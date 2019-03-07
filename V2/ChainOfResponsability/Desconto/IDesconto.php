<?php

namespace DesingPatterns\V2\ChainOfResponsability\Desconto;

use DesingPatterns\V2\Strategy\Orcamento\Orcamento;

interface IDesconto
{
    public function descontar(Orcamento $orcamento);
    public function setProximo(IDesconto $desconto);
}