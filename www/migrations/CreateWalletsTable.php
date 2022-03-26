<?php

namespace Migrations;

use App\Database\Migration\Migration;

/**
 * Class CreateWalletsTable
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class CreateWalletsTable extends Migration
{

    /**
     * @inheritDoc
     */
    public function up(): void
    {
        $this->database->query(
            'create table wallets (
                    id serial8,
                    balance float8 not null default 0.0,
                    user_id integer unique not null references users,
                    rate_id integer references rates,
                    primary key (id)
                   )'
        );
    }

    /**
     * @inheritDoc
     */
    public function down(): void
    {
        $this->database->query('drop table wallets');
    }
}