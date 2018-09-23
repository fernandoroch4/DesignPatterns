<?php

require_once 'BookPHPPrototype.php';
use Prototype;

$owners = [
    'Iron Man',
    'Huck',
    'Spider Man',
    'Thor'
];

$phpbook = new Prototype\BookPHPPrototype();
$phpbook->setTitle('The Magic PHP for Superhero');

foreach ($owners as $key => $owner) {
    $ownerbook = clone($phpbook);
    $ownerbook->setOwner($owner);
    $books[] = $ownerbook;
}

print_r($books);


