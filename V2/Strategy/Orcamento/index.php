<?php

require '../../vendor/autoload.php';
use DesingPatterns\V2\Strategy\Orcamento\Orcamento;
use DesingPatterns\V2\Strategy\Orcamento\IImposto;
use DesingPatterns\V2\Strategy\Orcamento\ICMS;
use DesingPatterns\V2\Strategy\Orcamento\ISS;
use DesingPatterns\V2\Strategy\Orcamento\CalculadoraImpostos;

$orcamento = new Orcamento(500);

$icms = new ICMS();

$iss = new ISS();

$calculadoraImpostos = new CalculadoraImpostos();

echo $calculadoraImpostos->realizaCalculo($orcamento,$icms);
echo "<br />";
echo $calculadoraImpostos->realizaCalculo($orcamento,$iss);