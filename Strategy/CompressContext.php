<?php

namespace DesignPatterns\Strategy;

class CompressContext
{
    private $compressStrategy;

    public function __construct(CompressStrategy $compressStrategy)
    {
        $this->compressStrategy = $compressStrategy;
    }

    public function setCompressStrategy(CompressStrategy $compressStrategy)
    {
        $this->compressStrategy = $compressStrategy;
    }

    public function compress(string $filePath)
    {
        $this->compressStrategy->compress($filePath);
    }
}