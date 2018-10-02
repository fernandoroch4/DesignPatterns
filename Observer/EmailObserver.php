<?php

namespace DesignPatterns\Observer;

class EmailObserver implements Observer
{
    public function updated(string $cod)
    {
        $this->sendEmailEmptyStock($cod);
    }
    public function sendEmailEmptyStock(string $cod)
    {
        echo "Notification sent to office";
    }
}