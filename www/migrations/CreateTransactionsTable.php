<?php

namespace Migrations;

use App\Database\Migration\Migration;

/**
 * Class CreateTransactionsTable
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class CreateTransactionsTable extends Migration
{

    /**
     * @return void
     */
    public function up(): void
    {
        $this->database->query(
            'create table transactions (
                    id serial2,
                    name varchar(10) not null,
                    PRIMARY KEY (id)
                   )'
        );
    }

    /**
     * @return void
     */
    public function down(): void
    {
        $this->database->query('DROP TABLE transactions');
    }
}