<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Facade\LibraryFacade;

$libraryFacade = new LibraryFacade();

$bookCod = '123Abc';
$customerId = '12345';

$withdrawal = $libraryFacade->withdrawal($bookCod, $customerId);
if ($withdrawal) {
    $libraryFacade->messageDelivery($bookCod, $customerId, 'API_KEY', 'API_PASS');
}