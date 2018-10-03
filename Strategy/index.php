<?php

require_once '../vendor/autoload.php';

use DesignPatterns\Strategy\CompressionRar;
use DesignPatterns\Strategy\CompressionTar;
use DesignPatterns\Strategy\CompressionZip;
use DesignPatterns\Strategy\CompressContext;

$strategyRar = new CompressionRar();
$strategyTar = new CompressionTar();
$strategyZip = new CompressionZip();

$compressContext = new CompressContext($strategyRar);
$compressContext->compress('/file/path');

echo "\n";

$compressContext = new CompressContext($strategyTar);
$compressContext->compress('/file/path');

echo "\n";

$compressContext = new CompressContext($strategyZip);
$compressContext->compress('/file/path');
