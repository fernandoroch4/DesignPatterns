<?php

require_once '../vendor/autoload.php';

use DesignPatterns\TemplateMethod\TaxFood;
use DesignPatterns\TemplateMethod\TaxClothing;
use DesignPatterns\TemplateMethod\TaxEletronic;

$foodTax = new TaxFood();
$clothingTax = new TaxClothing();
$eletronicTax = new TaxEletronic();

echo "Food: final price: " . $foodTax->calculateTax(10.9);
echo "\nClothing: final price: " . $clothingTax->calculateTax(10.9);
echo "\nEletronic: final price: " . $clothingTax->calculateTax(10.9);