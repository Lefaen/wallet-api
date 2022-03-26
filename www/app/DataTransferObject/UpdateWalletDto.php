<?php

namespace App\DataTransferObject;

use App\Enums\Rates;
use App\Enums\Reasons;
use App\Enums\Transactions;
use App\Request\_Request;

/**
 * Class UpdateWalletDto
 * @package DataTransferObject
 *
 * @author Pavel Parshin
 */
class UpdateWalletDto extends DataTransferObject
{
    /**
     * @var Rates
     */
    public rates $rate;

    /**
     * @var Transactions
     */
    public transactions $transaction;

    /**
     * @var Reasons
     */
    public reasons $reason;

    /**
     * @var float
     */
    public float $sum;

    public function __construct(_Request $request)
    {
        parent::__construct($request);
        $this->transaction  = Transactions::from($request->getBodyParam('transaction'));
        $this->rate = Rates::from($request->getBodyParam('rate'));
        $this->reason = Reasons::from($request->getBodyParam('reason'));
        $this->sum = $request->getBodyParam('sum');
    }
}