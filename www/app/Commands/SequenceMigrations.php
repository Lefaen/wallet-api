<?php

namespace Commands;

use Database\Migration\_Migration;
use Database\Migration\Migration;
use Migrations\CreatePaymentsTable;
use Migrations\CreateRatesTable;
use Migrations\CreateUsersTable;
use Migrations\CreateWalletsTable;

/**
 * Class SequenceMigrations
 * @package Commands
 *
 * @author Pavel Parshin
 */
class SequenceMigrations
{
    /**
     * @var _Migration[]
     */
    private array $list;

    /**
     *
     */
    public function __construct()
    {
        $this->list = [
            new CreateUsersTable(),
            new CreateWalletsTable(),
            new CreateRatesTable(),
            new CreatePaymentsTable(),
        ];
    }

    /**
     * @return void
     */
    public static function migrate()
    {
        $sequenceMigrations = new static();
        foreach ($sequenceMigrations->list as $migration) {
            $migration->up();
        }
    }

    /**
     * @return void
     */
    public static function rollback()
    {
        $sequenceMigrations = new static();
        foreach ($sequenceMigrations->list as $migration) {
            $migration->down();
        }
    }
}