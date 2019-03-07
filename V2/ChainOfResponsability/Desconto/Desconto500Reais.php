<?php

namespace DesingPatterns\V2\ChainOfResponsability\Desconto;

use DesingPatterns\V2\Strategy\Orcamento\Orcamento;

class Desconto500Reais implements IDesconto
{
        private $proximoDesconto;

        public function setProximo(IDesconto $proximo)
        {
          $this->proximoDesconto = $proximo;
        }

        public function descontar(Orcamento $orcamento)
        {
          if($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
          }
          else {
            return $this->proximoDesconto->descontar($orcamento);
          }
        }
}