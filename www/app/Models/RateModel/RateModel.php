<?php

namespace App\Models\RateModel;

use App\Models\Model;

class RateModel extends Model
{
    protected string $table = 'rates';

    protected int $id;

    protected float $rate;

    public function getId()
    {
        return $this->id;
    }

    public function getRate(): float
    {
        return $this->rate;
    }
}