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

    protected int $id;

    public function getId()
    {
        return $this->id;
    }
}