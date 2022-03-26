<?php

namespace App\Responses;

use App\Models\_Model;
use App\Models\Wallet\WalletModel;

class WalletResponse extends Response
{
    protected _Model|WalletModel $model;
    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        /** @var WalletModel $this->model */
        return [
            'balance' => $this->model->getBalance(),
        ];
    }
}