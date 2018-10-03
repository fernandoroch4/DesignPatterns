<?php

namespace DesignPatterns\TemplateMethod;

class TaxEletronic extends TaxAbstract
{
    const ELETRONIC_TAX = 1.2;
    const EXTRA_TAX = 0.1;
    
    protected function variableTax(float $price): float
    {
        return ($price * self::ELETRONIC_TAX);
    }
    protected function extraTax(float $price): float
    {
        return $price - ($price * self::EXTRA_TAX);
    }
}