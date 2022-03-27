<?php

namespace App\Router;

use App\Enums\HttpMethods;
use App\Exceptions\Exception;
use App\Request\_Request;
use App\Request\Request;
use Routes\_Routes;
use Routes\Routes;

/**
 * Class Router
 * @package App\Router
 *
 * @author Pavel Parshin
 */
class Router implements _Router
{
    /**
     * @var string|mixed
     */
    private string $uri;

    /**
     * @var HttpMethods
     */
    private HttpMethods $method;

    /**
     * @var _Routes|Routes
     */
    private _Routes $routes;

    /**
     * @var array
     */
    private array $pathParams;

    /**
     * @var _Route
     */
    private _Route $route;

    /**
     * @param string $uri
     * @param string $method
     * @throws Exception
     */
    public function __construct(string $uri, string $method)
    {
        $this->routes = new Routes();
        $this->uri = parse_url($uri)['path'];
        $this->method = HttpMethods::from($method);
        $this->route = $this->validateRoute();
    }

    /**
     * @return _Route
     * @throws Exception
     */
    private function validateRoute(): _Route
    {
        $routes = new Routes();
        foreach ($routes->getRoutes() as $route) {
            /** @var _Route $route */
            $mask = $route->getRegexUri();
            if (preg_match_all($mask, $this->uri, $matches, PREG_SET_ORDER) && $this->method === $route->getMethod()) {
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