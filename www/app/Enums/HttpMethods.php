<?php

namespace App\Enums;

/**
 * Class HttpMethods
 * @package App\Enums
 *
 * @author Pavel Parshin
 */
enum HttpMethods: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';
}