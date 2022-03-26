<?php

namespace Migrations;

use App\Database\Migration\Migration;

/**
 * Class CreateUsersTable
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class CreateUsersTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        $this->database->query(
            'create table users (
                    id serial8,
                    primary key (id)
                   )'
        );
    }

    /**
     * @return void
     */
    public function down(): void
    {
        $this->database->query('drop table users');
    }
}