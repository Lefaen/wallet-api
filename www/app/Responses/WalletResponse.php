<?php

namespace App\Responses;

/**
 * Class WalletResponse
 * @package App\Responses
 *
 * @author Pavel Parshin
 */
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