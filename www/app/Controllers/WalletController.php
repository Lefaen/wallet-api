<?php

namespace App\Controllers;

use App\Responses\WalletResponse;
use App\Services\WalletService;

class WalletController extends Controller
{
    private WalletService $walletService;

    public function __construct()
    {
        $this->walletService = new WalletService();
    }

    public function show(int $id): WalletResponse
    {
        $wallet = $this->walletService->getOne($id);
        return new WalletResponse($wallet);
    }

    public function update(int $id)
    {

    }
}