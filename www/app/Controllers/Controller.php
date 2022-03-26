<?php

namespace App\Controllers;

use App\Database\_Database;

/**
 * Class Controller
 * @package App\Controllers
 *
 * @author Pavel Parshin
 */
class Controller implements _Controller
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