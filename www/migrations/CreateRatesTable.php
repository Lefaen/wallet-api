<?php

namespace Migrations;

use App\Database\Migration\Migration;

class CreateRatesTable extends Migration
{

    /**
     * @inheritDoc
     */
    public function up(): void
    {
        $this->database->query(
            'create table rates (
                    id serial,
                    currency varchar(10) not null,
                    rate float8 not null default 1,
                    is_base bool not null default false,
                    primary key (id)
                   )'
        );
    }

    /**
     * @inheritDoc
     */
    public function down(): void
    {
        $this->database->query('drop table rates');
    }
}