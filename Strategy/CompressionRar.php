<?php

namespace DesignPatterns\Strategy;

class CompressionRar extends CompressStrategy
{
    public function compress(string $filePath): bool
    {
        echo "File compressed in '.RAR' format";
        return true;
    }
}