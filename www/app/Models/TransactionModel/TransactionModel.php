<?php

namespace App\Models\TransactionModel;

use App\Models\Model;

/**
 * Class TransactionModel
 * @package App\Models\TransactionModel
 *
 * @author Pavel Parshin
 */
class TransactionModel extends Model
{
    /**
     * @var string
     */
    protected string $table = 'transactions';

    /**
     * @var int
     */
    protected int $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}