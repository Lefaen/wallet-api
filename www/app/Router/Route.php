<?php

namespace App\Router;

use App\Enums\HttpMethods;

class Route implements _Route
{
    private string $uri;

    private HttpMethods $method;

    private string $controller;

    private string $action;

    public function __construct(string $uri, HttpMethods $method, string $classController, string $methodName)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->controller = $classController;
        $this->action = $methodName;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return HttpMethods
     */
    public function getMethod(): HttpMethods
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    public function getRegexUri(): string
    {
        $patterns = [
            '/\//',
            '/{.+?}/',
        ];
        $replacements = [
            '\\/',
            '(.)'
        ];
        return '/' . preg_replace($patterns, $replacements, $this->uri) . '/i';
    }
}