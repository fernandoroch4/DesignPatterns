<?php

require_once 'Singleton.php';

use DesignPatterns\Singleton\LogsSingleton as log;

$instance = log::getInstance();
$newInstance = log::getInstance();

if ($instance === $newInstance) {
    echo 'The instances are equal';
}

for ($i=0; $i < rand(0, 100); $i++) { 
    $data[] = 'Register n. ' . $i;
}

$instance->saveLog($data);