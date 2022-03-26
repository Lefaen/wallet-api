<?php

namespace Models\Wallet;

use DataTransferObject\UpdateWalletDto;
use Enums\rates;
use Models\Model;

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