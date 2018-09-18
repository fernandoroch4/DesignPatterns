<?php
require __DIR__ . '/vendor/autoload.php';

$teslaFactory = new \FactoryMethod\TeslaFactory();
$dodgeFactory = new \FactoryMethod\DodgeFactory();

try {
    $teslaModelX = $teslaFactory->createCar('x_model');
    $teslaModelS = $teslaFactory->createCar('s_model');

    $dodgeChart = $dodgeFactory->createCar('dodge');
    $dodgeDart = $dodgeFactory->createCar('dart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $teslaModelS->speed();
echo $teslaModelS->brake();
echo $teslaModelS->switchGear();

echo $teslaModelX->speed();
echo $teslaModelX->brake();
echo $teslaModelX->switchGear();

echo $dodgeChart->speed();
echo $dodgeChart->brake();
echo $dodgeChart->switchGear();

echo $dodgeDart->speed();
echo $dodgeDart->brake();
echo $dodgeDart->switchGear();