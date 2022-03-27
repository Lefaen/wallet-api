<?php

namespace App\Request;

use App\Exceptions\RequestParamsException;

/**
 * Class Request
 * @package App\Request
 *
 * @author Pavel Parshin
 */
class Request implements _Request
{
    /**
     * @var array
     */
    protected array $postParams;

    /**
     * @var array
     */
    protected array $queryParams;

    /**
     * @var array
     */
    protected array $bodyParams;

    /**
     * @param $params
     * @return void
     */
    public function setPostParams($params): void
    {
        $this->postParams = $params;
    }

    /**
     * @param $params
     * @return void
     */
    public function setQueryParams($params): void
    {
        $this->queryParams = $params;
    }

    /**
     * @param $params
     * @return void
     */
    public function setBodyParams($params): void
    {
        $this->bodyParams = $params;
    }

    /**
     * @return array
     */
    public function getBodyParams(): array
    {
        return $this->bodyParams;
    }

    /**
     * @param $key
     * @return mixed
     * @throws RequestParamsException
     */
    public function getBodyParam($key): mixed
    {
        if (!isset($this->bodyParams[$key])) {
            throw new RequestParamsException();
        }
        return $this->bodyParams[$key];
    }

    /**
     * @return static
     */
    public static function current(): static
    {
        $request = new Request();
        if (!empty($_POST)) {
            $request->setPostParams($_POST);
        }
        if (!empty($_GET)) {
            $request->setQueryParams($_GET);
        }
        if ($data = json_decode(file_get_contents('php://input'), true)) {
            $request->setBodyParams($data);
        }
        return $request;
    }
}