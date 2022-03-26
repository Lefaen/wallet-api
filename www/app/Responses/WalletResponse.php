<?php

namespace App\Responses;

class WalletResponse extends Response
{
    /**
     * @inheritDoc
     */
    public function toJson(): string
    {
        return 'test wallet';
    }
}