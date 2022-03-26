<?php

namespace Migrations;

use App\Database\Migration\Migration;

class CreateTransactionsTable extends Migration
{

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

    public function down(): void
    {
        $this->database->query('DROP TABLE transactions');
    }
}