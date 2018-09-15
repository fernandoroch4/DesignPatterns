<?php
require_once 'Singleton.php';
use Singleton\LogsSingleton;

$instance = LogsSingleton::getInstance(10);
$newInstance = LogsSingleton::getInstance('10');

if ($instance === $newInstance) {
    echo 'The instances are equal';
}