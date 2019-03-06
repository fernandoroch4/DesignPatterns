<?php

namespace DesingPatterns\V2\Strategy\Orcamento;

interface IImposto
{
    public function calcula(Orcamento $orcamento);
}