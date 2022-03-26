<?php

namespace App\Database;

/**
 * Class ConnectConfigurationDatabase
 * @package Database
 *
 * @author Pavel Parshin
 */
class ConnectConfigurationDatabase implements _ConnectConfigurationDatabase
{
    /**
     * @var string
     */
    private string $host;
    /**
     * @var string
     */
    private string $port;
    /**
     * @var string
     */
    private string $user;
    /**
     * @var string
     */
    private string $pass;
    /**
     * @var string
     */
    private string $database;

    /**
     * @param string|null $host
     * @param string|null $port
     * @param string|null $user
     * @param string|null $pass
     * @param string|null $database
     */
    public function __construct(
        ?string $host = null,
        ?string $port = null,
        ?string $user = null,
        ?string $pass = null,
        ?string $database = null
    ) {
        $this->host = $host ?? 'db';
        $this->port = $port ?? '5432';
        $this->user = $user ?? 'root';
        $this->pass = $pass ?? 'root';
        $this->database = $database ?? 'postgres';

    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }
}