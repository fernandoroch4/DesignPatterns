<?php

namespace DesignPatterns\Observer;

interface Subject
{
    public function addObserver(Observer $observer);
    public function removeObserver(Observer $observer): bool;
    public function notifyObservers(string $cod);
}