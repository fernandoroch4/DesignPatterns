<?php
namespace DesignPatterns\Adapter;

class ErpIntegration
{
    public function token($apiKey)
    {
        return md5($apiKey);
    }
    public function order($order, $apiKey) {
        return true;
    }
}