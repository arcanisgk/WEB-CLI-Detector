<?php

declare(strict_types=1);

use IcarosNet\Utilities\WebCLIDetector;

require_once __DIR__."/../vendor/autoload.php";

$wc_detector = new WebCLIDetector();

if ($wc_detector->isCLI()) {
    echo 'Running from CLI'.PHP_EOL;
}

if ($wc_detector->isWEB()) {
    echo 'Running from WEB<br>';
}

echo 'Get Raw Environment: '.$wc_detector->getEnvironment();
