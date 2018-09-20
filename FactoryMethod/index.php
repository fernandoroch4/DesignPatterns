<?php

require_once 'TeslaFactory.php';
require_once 'DodgeFactory.php';

$teslaFactory = new \FactoryMethod\TeslaFactory();
$dodgeFactory = new \FactoryMethod\DodgeFactory();

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