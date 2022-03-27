<?php

namespace Migrations;

use App\Database\Migration\Migration;
use App\Enums\Rates;
use App\Enums\Reasons;
use App\Enums\Transactions;

/**
 * Class InsertStartData
 * @package Migrations
 *
 * @author Pavel Parshin
 */
class InsertStartData extends Migration
{

    /**
     * @inheritDoc
     */
    public function up(): void
    {
        $this->database->query("insert into rates (currency, rate, is_base) values
                                          ('".Rates::rub->value."', 1.0, true),
                                          ('".Rates::usd->value."', 0.0098, false)
                                          ");
        $this->database->query("insert into transactions (name) values 
                                          ('".Transactions::credit->value."'),
                                          ('".Transactions::debit->value."')
                                          ");
        $this->database->query("insert into reasons (name) values 
                                          ('".Reasons::refund->value."'),
                                          ('".Reasons::stock->value."')
                                          ");
    }

    /**
     * @inheritDoc
     */
    public function down(): void
    {
        $this->database->query('truncate users, rates, transactions, reasons');
    }
}