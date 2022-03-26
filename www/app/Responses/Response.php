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
     * @var int
     */
    protected int $status = 200;

    /**
     *
     */
    protected $model;

    /**
     * @param $model
     */
    public function __construct($model = null)
    {
        $this->model = $model;
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status): static
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
}