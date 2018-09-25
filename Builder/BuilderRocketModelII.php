<?php
namespace DesignPatterns\Builder;

class BuilderRocketModelII extends RocketBuilder
{
    public function buildModel()
    {
        $this->rocket->setModel('Rocket II');
    }
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(4350);
    }
    public function buildNumberOfEngines()
    {
        $this->rocket->setNumberOfEngines(4);
    }
    public function buildNumberOfSeats()
    {
        $this->rocket->setNumberOfSeats(8);
    }
}

