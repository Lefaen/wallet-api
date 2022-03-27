<?php

namespace App\Models\RateModel;

use App\Models\Model;

/**
 * Class RateModel
 * @package App\Models\RateModel
 *
 * @author Pavel Parshin
 */
class RateModel extends Model
{
    /**
     * @var string
     */
    protected string $table = 'rates';

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
}