<?php

namespace App\Responses;

/**
 * Interface _Response
 * @package Responses
 *
 * @author Pavel Parshin
 */
interface _Response
{
    /**
     * @return array
     */
    public function toArray(): array;
}