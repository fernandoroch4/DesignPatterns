<?php

namespace DesingPatterns\V2\ChainOfResponsability\Desconto;

use DesingPatterns\V2\Strategy\Orcamento\Orcamento;
use DesingPatterns\V2\ChainOfResponsability\Desconto\Desconto500Reais;

class Desconto5Itens implements IDesconto
{
        private $proximoDesconto;

        public function setProximo(IDesconto $proximo)
        {
          $this->proximoDesconto = $proximo;
        }

        public function descontar(Orcamento $orcamento)
        {
          if(count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
          }
          else {
            return $this->proximoDesconto->descontar($orcamento);
          }
        }
}