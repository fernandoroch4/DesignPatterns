<?php
namespace DesignPatterns\Adapter;

class IntegrationErpAdapter implements IErpAdapter
{
    private $erpIntegration;

    public function __construct(ErpIntegration $erpIntegrarion)
    {
        $this->erpIntegration = $erpIntegrarion;
    }

    public function buildToken(string $apiKey, string $user): string
    {
        return $this->erpIntegration->token($apiKey);
    }

    public function sendOrder(Order $order, string $token): bool
    {
        $formatOrder = [
            'totalPrice' => $order->price(),
            'cod' => $order->getOrderNumber()
        ];

        foreach ($order->getProducts() as $product) {
            $formatOrder['product'][] = $product;
        }
        return $this->erpIntegration->order($formatOrder, $token);
    }
}