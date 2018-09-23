<?php
namespace DesignPatterns\Prototype;

use DesignPatterns\Prototype\BookPrototype;

class BookPHPPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('PHP');
    }
    /**
     * Just no matter here, but is exmaple for show each clone interaction
     */
    public function __clone()
    {
        echo "Book cloned";
    }
}