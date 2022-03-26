<?php

use App\App;

include_once '../vendor/autoload.php';

try {
    new App();
} catch (\Exceptions\Exception $exception) {
    echo $exception->getMessage();
}