<?php

namespace DesingPatterns\V2\ChainOfResponsability\Desconto;

use DesingPatterns\V2\Strategy\Orcamento\Orcamento;

class SemDesconto implements IDesconto
{
        private $proximoDesconto;

        public function setProximo(IDesconto $proximo) {}

        public function descontar(Orcamento $orcamento)
        {
          return 0;
        }
}