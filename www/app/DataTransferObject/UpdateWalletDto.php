<?php

namespace DataTransferObject;

use Enums\rates;
use Enums\reasons;
use Enums\transactions;

class UpdateWalletDto
{
    public rates $rate;

    public transactions $transaction;

    public reasons $reason;

    public float $sum;
}