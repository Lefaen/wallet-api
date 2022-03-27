<?php

namespace Migrations;

use App\Database\Migration\Migration;

/**
 * Class CreatePaymentsTable
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class CreatePaymentsTable extends Migration
{

    /**
     * @return void
     */
    public function up(): void
    {
        $this->database->query(
            'create table payments (
                    id serial8,
                    sum float8 not null,
                    datetime timestamp not null default current_timestamp,
                    wallet_id integer references wallets,
                    rate_id integer not null references rates,
                    transaction_id integer not null references transactions,
                    reason_id integer not null references reasons,
                    PRIMARY KEY (id)
                   )'
        );
    }

    /**
     * @return void
     */
    public function down(): void
    {
        $this->database->query('DROP TABLE payments');
    }
}