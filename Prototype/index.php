<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Prototype\BookPHPPrototype as BPHPP;

$owners = [
    'Iron Man',
    'Huck',
    'Spider Man',
    'Thor'
];

$phpbook = new BPHPP();
$phpbook->setTitle('The Magic PHP for Superhero');

foreach ($owners as $key => $owner) {
    $ownerbook = clone($phpbook);
    $ownerbook->setOwner($owner);
    $books[] = $ownerbook;
}

print_r($books);


