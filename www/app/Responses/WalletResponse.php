<?php

namespace App\Responses;

class WalletResponse extends Response
{

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'balance' => $this->model->getBalance(),
        ];
    }
}