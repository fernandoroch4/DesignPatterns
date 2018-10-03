<?php

namespace DesignPatterns\TemplateMethod;

class TaxFood extends TaxAbstract
{
    protected function variableTax(float $price): float
    {
        return $price;
    }
}