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

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status): static;

    /**
     * @return int
     */
    public function getStatus(): int;
}