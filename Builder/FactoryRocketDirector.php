<?php
namespace DesignPatterns\Builder;

class FactoryRocketDirector
{
    protected $factoryRocket;

    public function __construct(RocketBuilder $factoryRocket)
    {
        $this->factoryRocket = $factoryRocket;
    }
    public function getRocket(): RocketProduct
    {
        return $this->factoryRocket->getRocket();
    }
    public function builderRocket()
    {
        $this->factoryRocket->buildModel();
        $this->factoryRocket->buildFuelTank();
        $this->factoryRocket->buildNumberOfEngines();
        $this->factoryRocket->buildNumberOfSeats();
    }    
}