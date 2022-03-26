<?php

namespace App\Database;

/**
 * Interface _Database
 * @package Database
 *
 * @author Pavel Parshin
 */
interface _Database
{
    /**
     * @param string $query
     * @param array $data
     */
    public function query(string $query, array $data = []);
}