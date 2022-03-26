<?php

namespace App\Router;

use App\Request\_Request;

/**
 * Interface _Router
 * @package App\Router
 *
 * @author Pavel Parshin
 */
interface _Router
{
    /**
     * @return array
     */
    public function getPathParams(): array;

    /**
     * @return _Route
     */
    public function getRoute(): _Route;
}