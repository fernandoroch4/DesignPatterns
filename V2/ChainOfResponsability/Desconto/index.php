<?php

require '../../vendor/autoload.php';
use DesingPatterns\V2\Strategy\Orcamento\Orcamento;
use DesingPatterns\V2\Strategy\Orcamento\IImposto;
use DesingPatterns\V2\Strategy\Orcamento\ICMS;
use DesingPatterns\V2\Strategy\Orcamento\ISS;
use DesingPatterns\V2\Strategy\Orcamento\CalculadoraImpostos;
use DesingPatterns\V2\ChainOfResponsability\Desconto\Item;
use DesingPatterns\V2\ChainOfResponsability\Desconto\CalculadorDeDescontos;

$orcamento = new Orcamento(1000);

$icms = new ICMS();

$iss = new ISS();

$calculadoraImpostos = new CalculadoraImpostos();

echo $calculadoraImpostos->realizaCalculo($orcamento,$icms);
echo "<br />";
echo $calculadoraImpostos->realizaCalculo($orcamento,$iss);

$orcamento->adicionarItem(new Item('Caneta Azul', 300.0));
$orcamento->adicionarItem(new Item('Caneta Vermelha', 700.0));

$calculadoraDesconto = new CalculadorDeDescontos();
$desconto = $calculadoraDesconto->calcula($orcamento);

echo "<br />";
echo $desconto;