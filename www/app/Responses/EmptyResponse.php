<?php

namespace App\Responses;

/**
 * Class EmptyResponse
 * @package App\Responses
 *
 * @author Pavel Parshin
 */
class EmptyResponse extends Response
{
    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [];
    }
}