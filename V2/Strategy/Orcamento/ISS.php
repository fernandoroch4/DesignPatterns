<?php

namespace DesingPatterns\V2\Strategy\Orcamento;

class ISS implements IImposto
{
    public function calcula(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }
}