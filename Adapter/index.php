<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Adapter\ErpIntegration;
use DesignPatterns\Adapter\IntegrationErpAdapter;
use DesignPatterns\Adapter\Order;

$legacyIntegration = new ErpIntegration();
$integrationErpAdapter = new IntegrationErpAdapter($legacyIntegration);
$token = $integrationErpAdapter->buildToken('9999999', 'Super Man');

$newOrder = new Order();
$newOrder->setPrice(12800.90)->setOrderNumber(time())->addProduct('Red cape')
                                                     ->addProduct('Eyeglasses')
                                                     ->addProduct('Suit');

$succesSent = $integrationErpAdapter->sendOrder($newOrder, $token);
if ($succesSent) {
    echo "Order sent successfully";
}