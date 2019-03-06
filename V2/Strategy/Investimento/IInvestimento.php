<?php

namespace DesingPatterns\V2\Strategy\Investimento;

interface IInvestimento
{
    public function calcula(Conta $conta);
}