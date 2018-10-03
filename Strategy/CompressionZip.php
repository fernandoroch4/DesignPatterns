<?php

namespace DesignPatterns\Strategy;

class CompressionZip extends CompressStrategy
{
    public function compress(string $filePath): bool
    {
        echo "File compressed in '.ZIP' format";
        return true;
    }
}