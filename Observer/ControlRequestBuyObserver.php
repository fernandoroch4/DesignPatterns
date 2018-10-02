<?php

namespace DesignPatterns\Observer;

class ControlRequestBuyObserver implements Observer
{
    public function updated(string $cod)
    {
        $this->addRequestBuy($cod);
    }
    public function addRequestBuy(string $cod)
    {
        echo "Product add to buy list";
    }
}