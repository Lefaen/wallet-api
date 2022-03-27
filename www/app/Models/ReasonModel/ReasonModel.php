<?php

namespace App\Models\ReasonModel;

use App\Models\Model;

/**
 * Class ReasonModel
 * @package App\Models\ReasonModel
 *
 * @author Pavel Parshin
 */
class ReasonModel extends Model
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $table = 'reasons';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}