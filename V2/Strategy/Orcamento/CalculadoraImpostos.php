<?php

namespace DesingPatterns\V2\Strategy\Orcamento;

class CalculadoraImpostos
{
    public function realizaCalculo(Orcamento $orcamento, IImposto $imposto) {

    $valor = $imposto->calcula($orcamento); 

    echo $valor;

    }
}