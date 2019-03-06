<?php

namespace DesingPatterns\V2\Strategy\Investimento;

class Conta
{
    private $saldo;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}