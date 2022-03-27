<?php

namespace App\DataTransferObject;

use App\Request\_Request;

/**
 * Class DataTransferObject
 * @package App\DataTransferObject
 *
 * @author Pavel Parshin
 */
class DataTransferObject
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