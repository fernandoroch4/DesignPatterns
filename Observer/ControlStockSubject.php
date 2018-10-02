<?php

namespace DesignPatterns\Observer;

class ControlStockSubject implements Subject
{
    private $observers;

    public function updateStockProduct(string $cod, int $newQuantity): bool
    {
        if ($newQuantity === 0) {
            $this->notifyObservers($cod);
        }
    }
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function removeObserver(Observer $removeObserver): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $removeObserver) {
                unset($this->observers[$index]);
                return true;
            }
        }
        return false;
    }
    public function notifyObservers(string $cod)
    {
        foreach ($this->observers as $observer) {
            $observer->updated($observer);
        }
    }
}