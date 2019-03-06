<?php

namespace DesingPatterns\V2\Strategy\Investimento;

class RealizadorDeInvestimentos
{

    public function realiza(Conta $conta, IInvestimento $investimento) {
        $resultado = $investimento->calcula($conta);

        $conta->depositar($resultado * 0.75 );
        return $conta->getSaldo();
    }
}