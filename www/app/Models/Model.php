<?php

namespace App\Models;

use App\Database\_Database;

/**
 * Class Model
 * @package App\Models
 *
 * @author Pavel Parshin
 */
class Model
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

    public function __get(string $name)
    {
        // TODO: Implement __get() method.
    }
}