<?php

namespace DesignPatterns\TemplateMethod;

abstract class TaxAbstract
{
    const FIXED_TAX1 = 1.3;
    const FIXED_TAX2 = 1.1;

    private function fixedTax1(float $price): float
    {
        return ($price * self::FIXED_TAX1);
    }

    private function fixedTax2(float $price): float
    {
        return ($price * self::FIXED_TAX2);
    }

    abstract protected function variableTax(float $price): float;

    protected function extraTax(float $price): float
    {
        return $price;
    }
    
    public function calculateTax(float $price): float
    {
        $price = $this->fixedTax1($price);
        $price = $this->fixedTax2($price);
        $price = $this->extraTax($price);
        $price = $this->variableTax($price);
        return $price;
    }
}