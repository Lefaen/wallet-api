<?php

namespace App\Controllers;

use App\Responses\WalletResponse;

class WalletController extends Controller
{
    public function show(int $id): WalletResponse
    {
        return new WalletResponse();
    }

    public function update(int $id)
    {

    }
}