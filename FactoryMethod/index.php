<?php

require_once '../vendor/autoload.php';

use DesignPatterns\FactoryMethod\TeslaFactory as TF;
use DesignPatterns\FactoryMethod\DodgeFactory as DF;

$teslaFactory = new TF();
$dodgeFactory = new DF();

try {
    $teslaModelX = $teslaFactory->createCar('x_model');
    $teslaModelS = $teslaFactory->createCar('s_model');

    $dodgeChart = $dodgeFactory->createCar('charger');
    $dodgeDart = $dodgeFactory->createCar('dart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "<br>";
echo $teslaModelS->speed();
echo $teslaModelS->brake();
echo $teslaModelS->switchGear();
echo "<br>";
echo $teslaModelX->speed();
echo $teslaModelX->brake();
echo $teslaModelX->switchGear();
echo "<br>";
echo $dodgeChart->speed();
echo $dodgeChart->brake();
echo $dodgeChart->switchGear();
echo "<br>";
echo $dodgeDart->speed();
echo $dodgeDart->brake();
echo $dodgeDart->switchGear();