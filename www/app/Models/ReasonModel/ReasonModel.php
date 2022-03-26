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
    protected int $id;

    /**
     * @var string
     */
    protected string $table = 'reasons';

    public function getId()
    {
        return $this->id;
    }
}