<?php

namespace Migrations;

use App\Database\Migration\Migration;

class CreateReasonsTable extends Migration
{

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

    public function down(): void
    {
        $this->database->query('DROP TABLE transactions');
    }
}