<?php

namespace App\Controllers;

use App\Database\_Database;
use App\Request\_Request;

/**
 * Class Controller
 * @package App\Controllers
 *
 * @author Pavel Parshin
 */
class Controller implements _Controller
{
    /**
     * @var _Request
     */
    protected _Request $request;

    /**
     * @param _Request $request
     */
    public function __construct(_Request $request)
    {
        $this->request = $request;
    }
}