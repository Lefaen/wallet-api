<?php

namespace App\Enums;

/**
 * Class transactions
 * @package Enums
 *
 * @author Pavel Parshin
 */
enum Transactions: string
{
    case debit = 'debit';
    case credit = 'credit';
}