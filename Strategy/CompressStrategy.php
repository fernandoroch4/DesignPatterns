<?php

namespace DesignPatterns\Strategy;

abstract class CompressStrategy
{
    public function renameFileInOrder()
    {
        echo "Files renamed!";
    }

    abstract public function compress(string $filePath): bool;
}