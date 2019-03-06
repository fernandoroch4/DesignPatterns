<?php

namespace DesingPatterns\V2\Strategy\Investimento;

class Moderado implements IInvestimento
{
    private $random;

    public function calcula(Conta $conta) {
        $this->random = mt_rand(1,100);
        if ($this->random >= 50) return $conta->getSaldo() * 0.025;
        else return $conta->getSaldo() * 0.007;
    }
}