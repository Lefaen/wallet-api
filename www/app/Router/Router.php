<?php

namespace App\Router;

use App\Exceptions\Exception;
use Routes\_Routes;
use Routes\Routes;

class Router implements _Router
{
    private string $uri;

    private string $method;

    private _Routes $routes;

    private array $pathParams;

    private _Route $route;

    public function __construct(string $uri, string $method)
    {
        $this->routes = new Routes();
        $this->uri = parse_url($uri)['path'];
        $this->method = $method;
        $this->route = $this->validateRoute();
    }

    private function validateRoute(): _Route
    {
        $routes = new Routes();
        foreach($routes->getRoutes() as $route) {
            /** @var _Route $route */
            $mask = $route->getRegexUri();
            if (preg_match_all($mask, $this->uri, $matches,PREG_SET_ORDER)) {
                $this->pathParams = array_slice($matches[0], 1);
                return $route;
            }
        }
        throw new Exception('404 - нет роута');
    }

    /**
     * @return array
     */
    public function getPathParams(): array
    {
        return $this->pathParams;
    }

    /**
     * @return _Route
     */
    public function getRoute(): _Route
    {
        return $this->route;
    }

}