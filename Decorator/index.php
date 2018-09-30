<?php
require_once '../vendor/autoload.php';

use DesignPatterns\Decorator\Mage;
use DesignPatterns\Decorator\FireRing;
use DesignPatterns\Decorator\ForceNecklace;
use DesignPatterns\Decorator\MagicSword;

echo '<pre>';
$decorator = new Mage();
print_r($decorator);
$decorator = new FireRing($decorator);
print_r($decorator);
$decorator = new FireRing($decorator);
print_r($decorator);
$decorator = new ForceNecklace($decorator);
print_r($decorator);
$decorator = new MagicSword($decorator);
print_r($decorator);
echo $decorator->getName();
echo "\n";

echo $decorator->getAttack();
echo "\n";