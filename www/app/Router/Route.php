<?php

namespace App\Router;

use App\Enums\HttpMethods;

/**
 * Class Route
 * @package App\Router
 *
 * @author Pavel Parshin
 */
class Route implements _Route
{
    /**
     * @var string
     */
    private string $uri;

    /**
     * @var HttpMethods
     */
    private HttpMethods $method;

    /**
     * @var string
     */
    private string $controller;

    /**
     * @var string
     */
    private string $action;

    /**
     * @param string $uri
     * @param HttpMethods $method
     * @param string $classController
     * @param string $methodName
     */
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

    /**
     * @return string
     */
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