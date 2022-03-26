<?php

namespace App\Models\Wallet;

use App\Enums\Rates;
use App\Models\Model;
use DataTransferObject\UpdateWalletDto;

class WalletModel extends Model
{
    private rates $rate;

    private float $balance;

    public function updateWallet(UpdateWalletDto $updateWalletDto, int $walletId)
    {

    }

    public function getWallet(int $walletId)
    {

    }
}