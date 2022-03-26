<?php

namespace App\Database\Migration;

use App\Database\_Database;

abstract class Migration implements _Migration
{
    protected _Database $database;

    public function __construct(_Database $database)
    {
        $this->database = $database;
    }
}