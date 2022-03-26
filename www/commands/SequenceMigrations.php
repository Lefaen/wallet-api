<?php

namespace Commands;

use App\Database\_Database;
use App\Database\Database;
use App\Database\Migration\_Migration;
use Migrations\CreatePaymentsTable;
use Migrations\CreateReasonsTable;
use Migrations\CreateTransactionsTable;
use Migrations\CreateRatesTable;
use Migrations\CreateUsersTable;
use Migrations\CreateWalletsTable;
use Migrations\InsertStartData;

/**
 * Class SequenceMigrations
 * @package Commands
 *
 * @author Pavel Parshin
 */
class SequenceMigrations
{
    /**
     *
     */
    const COMMAND_MIGRATE = 'migrate';
    /**
     *
     */
    const COMMAND_ROLLBACK = 'rollback';

    /**
     * @var _Migration[]
     */
    private array $list;

    /**
     * @var _Database
     */
    private _Database $database;

    /**
     *
     */
    public function __construct()
    {
        $this->database = new Database();

        $this->list = [
            new CreateUsersTable($this->database),
            new CreateRatesTable($this->database),
            new CreateTransactionsTable($this->database),
            new CreateReasonsTable($this->database),
            new CreateWalletsTable($this->database),
            new CreatePaymentsTable($this->database),
            new InsertStartData($this->database),
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
        for(end($sequenceMigrations->list); !is_null(key($sequenceMigrations->list)); prev($sequenceMigrations->list)) {
            current($sequenceMigrations->list)->down();
        }
    }
}