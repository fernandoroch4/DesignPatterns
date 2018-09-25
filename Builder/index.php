<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Builder\FactoryRocketDirector;
use DesignPatterns\Builder\BuilderRocketModelI;
use DesignPatterns\Builder\BuilderRocketModelII;

$builderRocketI = new FactoryRocketDirector(new BuilderRocketModelI);
$builderRocketII = new FactoryRocketDirector(new BuilderRocketModelII);

$builderRocketI->builderRocket();
echo $builderRocketI->getRocket();

$builderRocketII->builderRocket();
echo $builderRocketII->getRocket();
