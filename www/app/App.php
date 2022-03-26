<?php

namespace App;

use App\Controllers\_Controller;
use App\Responses\_Response;
use App\Router\_Router;
use App\Router\Router;

/**
 * Class App
 * @package App
 *
 * @author Pavel Parshin
 */
class App
{
    /**
     * @var _Router
     */
    private _Router $router;

    /**
     * @var _Controller
     */
    private _Controller $controller;

    /**
     * @var _Response
     */
    private _Response $response;

    /**
     *
     */
    public function __construct()
    {
        $this->router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $controller = new ($this->router->getRoute()->getController())();
        $method = $this->router->getRoute()->getAction();
        $this->response = $controller->$method(...$this->router->getPathParams());
        http_response_code($this->response->getStatus());
        header('Accept: application/json');
        echo json_encode($this->response->toArray());
    }
}