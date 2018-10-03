<?php

namespace DesignPatterns\TemplateMethod;

class TaxClothing extends TaxAbstract
{
    const CLOTHING_TAX = 1.15;
    
    protected function variableTax(float $price): float
    {
        return ($price * self::CLOTHING_TAX);
    }
}