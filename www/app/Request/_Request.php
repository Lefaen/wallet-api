<?php

namespace App\Request;

/**
 * Interface _Request
 * @package App\Request
 *
 * @author Pavel Parshin
 */
interface _Request
{
    /**
     * @param $params
     * @return void
     */
    public function setPostParams($params): void;

    /**
     * @param $params
     * @return void
     */
    public function setQueryParams($params): void;

    /**
     * @param $params
     * @return void
     */
    public function setBodyParams($params): void;

    /**
     * @return array
     */
    public function getBodyParams(): array;

    /**
     * @param $key
     * @return mixed
     */
    public function getBodyParam($key): mixed;
}