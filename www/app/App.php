<?php

namespace App;

use App\Controllers\_Controller;
use App\Database\_Database;
use App\Database\Database;
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
     * @var _Database
     */
    private _Database $database;

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
        $this->database = new Database();
        $this->router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $controller = new ($this->router->getRoute()->getController())();
        $method = $this->router->getRoute()->getAction();
        $this->response = $controller->$method(...$this->router->getPathParams());
        echo $this->response->toJson();
    }
}