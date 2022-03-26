<?php

namespace App\Database;

interface _ConnectConfigurationDatabase
{
    public function getHost(): string;

    public function getPort(): string;

    public function getUser(): string;

    public function getPass(): string;

    public function getDatabase(): string;
}