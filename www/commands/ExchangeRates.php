<?php

namespace Commands;

use App\Database\_Database;
use App\Database\Database;
use App\Enums\Rates;
use Commands\Exceptions\UnavailableHost;

/**
 * Class ExchangeRates
 * @package Commands
 *
 * @author Pavel Parshin
 */
class ExchangeRates
{
    /**
     * @var _Database
     */
    private _Database $database;

    /**
     *
     */
    const COMMAND_UPDATE_RATES = 'update_rates';

    /**
     *
     */
    const host = 'https://www.cbr-xml-daily.ru/daily_json.js';

    /**
     *
     */
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @return void
     * @throws UnavailableHost
     */
    public static function update()
    {
        $exchangeRates = new ExchangeRates();
        $object = json_decode(file_get_contents(self::host));
        if (!$object) {
            throw new UnavailableHost();
        }
        foreach (Rates::cases() as $rate) {
            if (isset($object->Valute->{$rate->value}) && $currency = $object->Valute->{$rate->value}) {
                $exchangeRates->database->query(
                    'update rates set rate=? where currency=?',
                    [(float)$currency->Value, $rate->value]
                );
            }
        }
    }
}