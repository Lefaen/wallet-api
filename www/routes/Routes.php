<?php

namespace Routes;

use App\Controllers\WalletController;
use App\Enums\HttpMethods;
use App\Router\Route;

/**
 * Class Routes
 *
 * @author Pavel Parshin
 */
class Routes implements _Routes
{
    /**
     * @var string[]
     */
    private array $routes;

    /**
     *
     */
    public function __construct()
    {
        $this->routes = [
            new Route('users/{user}/wallet', HttpMethods::GET, WalletController::class, 'show'),
        ];
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}