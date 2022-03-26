<?php

namespace App\Router;

use App\Enums\HttpMethods;

/**
 * Interface _Route
 * @package App\Router
 *
 * @author Pavel Parshin
 */
interface _Route
{
    /**
     * @return string
     */
    public function getUri(): string;

    /**
     * @return HttpMethods
     */
    public function getMethod(): HttpMethods;

    /**
     * @return string
     */
    public function getController(): string;

    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string
     */
    public function getRegexUri(): string;
}