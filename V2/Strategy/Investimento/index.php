<?php

require '../../vendor/autoload.php';
use DesingPatterns\V2\Strategy\Investimento\Conta;
use DesingPatterns\V2\Strategy\Investimento\IInvestimento;
use DesingPatterns\V2\Strategy\Investimento\RealizadorDeInvestimentos;
use DesingPatterns\V2\Strategy\Investimento\Arrojado;
use DesingPatterns\V2\Strategy\Investimento\Conservador;


$conta = new Conta();
$conta->depositar(1000);
echo $conta->getSaldo();
echo "<br />";

$arrojado = new Arrojado();

$conservador = new Conservador();

$realizadorDeInvestimentos = new RealizadorDeInvestimentos();

echo $realizadorDeInvestimentos->realiza($conta,$arrojado);
echo "<br />";
echo $realizadorDeInvestimentos->realiza($conta,$conservador);