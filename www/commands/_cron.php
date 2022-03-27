<?php

include_once __DIR__ . '/../vendor/autoload.php';

use Commands\Exceptions\UnavailableHost;
use Commands\ExchangeRates;

try {
    ExchangeRates::update();
} catch (UnavailableHost $e) {
    echo $e->getMessage();
}