<?php
namespace DesignPatterns\Adapter;

interface IErpAdapter
{
    public function buildToken(string $apiKey, string $user): string;
    public function sendOrder(Order $order, string $token): bool;
}