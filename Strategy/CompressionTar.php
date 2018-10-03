<?php

namespace DesignPatterns\Strategy;

class CompressionTar extends CompressStrategy
{
    public function compress(string $filePath): bool
    {
        echo "File compressed in '.TAR' format";
        return true;
    }
}