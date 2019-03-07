<?php

namespace DesingPatterns\V2\ChainOfResponsability\Desconto;

use DesingPatterns\V2\Strategy\Orcamento\Orcamento;
use DesingPatterns\V2\ChainOfResponsability\Desconto\Desconto5Itens;
use DesingPatterns\V2\ChainOfResponsability\Desconto\Desconto500Reais;
use DesingPatterns\V2\ChainOfResponsability\Desconto\SemDesconto;

class CalculadorDeDescontos
{
    public function calcula(Orcamento $orcamento) {
      $desconto5 = new Desconto5Itens();
      $desconto500 = new Desconto500Reais();
      $semDesconto = new SemDesconto();

      $desconto5->setProximo($desconto500);
      $desconto500->setProximo($semDesconto);

      return $desconto5->descontar($orcamento);
    }
  }