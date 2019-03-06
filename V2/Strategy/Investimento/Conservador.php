<?php

namespace DesingPatterns\V2\Strategy\Investimento;

class Conservador implements IInvestimento
{
    public function calcula(Conta $conta)
    {
        return $conta->getSaldo() * 0.008;
    } 
}