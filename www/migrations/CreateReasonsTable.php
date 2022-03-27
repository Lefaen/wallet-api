<?php

namespace Migrations;

use App\Database\Migration\Migration;

/**
 * Class CreateReasonsTable
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class CreateReasonsTable extends Migration
{

    /**
     * @return void
     */
    public function up(): void
    {
        $this->database->query(
            'create table reasons (
                    id serial2,
                    name varchar(50) not null,
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