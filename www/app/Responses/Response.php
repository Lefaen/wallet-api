<?php

namespace App\Responses;

use App\Models\_Model;

/**
 * Class Response
 * @package App\Responses
 *
 * @author Pavel Parshin
 */
abstract class Response implements _Response
{
    /**
     * @var _Model
     */
    protected _Model $model;

    /**
     * @param _Model $model
     */
    public function __construct(_Model $model)
    {
        $this->model = $model;
    }
}