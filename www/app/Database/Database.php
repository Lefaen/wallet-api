<?php

namespace App\Database;

use PDO;

/**
 * Class Database
 * @package Database
 *
 * @author Pavel Parshin
 */
class Database implements _Database
{
    /**
     * @var PDO
     */
    private PDO $dbh;

    /**
     * @var _ConnectConfigurationDatabase
     */
    private _ConnectConfigurationDatabase $configurationDatabase;

    /**
     *
     */
    public function __construct()
    {
        $this->configurationDatabase = new ConnectConfigurationDatabase();
        $this->connect();
    }

    /**
     * @return void
     */
    private function connect()
    {
        $host = $this->configurationDatabase->getHost();
        $port = $this->configurationDatabase->getPort();
        $user = $this->configurationDatabase->getUser();
        $pass = $this->configurationDatabase->getPass();
        $db = $this->configurationDatabase->getDatabase();
        $this->dbh = new PDO("pgsql:host=$host;port=$port;dbname=$db;", $user, $pass);
    }

    /**
     * @param string $query
     * @param array $data
     * @return void
     */
    public function query(string $query, array $data = [])
    {
        $stmt = $this->dbh->query($query);

    }
}