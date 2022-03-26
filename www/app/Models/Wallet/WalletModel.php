<?php

namespace App\Models\Wallet;

use App\Enums\Rates;
use App\Models\Model;
use App\Models\RateModel\RateModel;
use App\Models\User\UserModel;

class WalletModel extends Model
{
    protected string $table = 'wallets';

    protected int $id;

    protected float $balance;

    protected UserModel $userModel;

    protected RateModel $rateModel;

    public function getBalance()
    {
        return $this->balance;
    }
}