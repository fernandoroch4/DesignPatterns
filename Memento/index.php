<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Memento\Text;

$text = new Text();
$text->writeText("A-> ");
$text->writeText("B-> ");
$text->writeText("C-> ");

echo $text->backText();

$text->undoWrite();

echo $text->backText();