<?php

namespace App\Database\Migration;

use App\Database\_Database;

/**
 * Class Migration
 * @package App\Database\Migration
 *
 * @author Pavel Parshin
 */
abstract class Migration implements _Migration
{
    /**
     * @var _Database
     */
    protected _Database $database;

    /**
     * @param _Database $database
     */
    public function __construct(_Database $database)
    {
        $this->database = $database;
    }
}