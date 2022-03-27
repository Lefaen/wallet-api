<?php

namespace App\Database;

/**
 * Interface _ConnectConfigurationDatabase
 * @package App\Database
 *
 * @author Pavel Parshin
 */
interface _ConnectConfigurationDatabase
{
    /**
     * @return string
     */
    public function getHost(): string;

    /**
     * @return string
     */
    public function getPort(): string;

    /**
     * @return string
     */
    public function getUser(): string;

    /**
     * @return string
     */
    public function getPass(): string;

    /**
     * @return string
     */
    public function getDatabase(): string;
}