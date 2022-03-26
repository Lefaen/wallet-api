<?php

namespace App\Enums;

/**
 * Class reasons
 * @package Enums
 *
 * @author Pavel Parshin
 */
enum Reasons: string
{
    case stock = 'stock';
    case refund = 'refund';
}