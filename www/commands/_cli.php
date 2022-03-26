<?php
include_once __DIR__ . '/../vendor/autoload.php';

use Commands\Exceptions\UnknownCommand;
use Commands\ExchangeRates;
use Commands\SequenceMigrations;

try {
    if (isset($argv[1]) && $command = $argv[1])
    switch ($command) {
        case SequenceMigrations::COMMAND_MIGRATE:
            SequenceMigrations::migrate();
            break;
        case SequenceMigrations::COMMAND_ROLLBACK:
            SequenceMigrations::rollback();
            break;
        case ExchangeRates::COMMAND_UPDATE_RATES:
            ExchangeRates::update();
            break;
        case 'help':
            echo 'test help' . PHP_EOL;
            break;
        default:
            throw new UnknownCommand();
    }
} catch (\Exceptions\Exception $exception) {
    echo $exception->getMessage();
}