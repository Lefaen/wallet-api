<?php

namespace App\Models;

use App\Database\_Database;
use App\Database\Database;

/**
 * Class Model
 * @package App\Models
 *
 * @author Pavel Parshin
 */
class Model implements _Model
{
    protected string $table;

    /**
     * @var _Database
     */
    protected _Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function __get(string $name)
    {
        // TODO: Implement __get() method.
    }

    public static function findById(int $id, array $fields = []): static
    {
        $model = new static();
        if (empty($fields)) {
            $select = '*';
        } else {
            $select = implode(',', $fields);
        }
        $object = $model->database->query('select '.$select.' from '.$model->table.' where id=?', [$id]);
        $model->setDataFromStdClass($object);
        return $model;
    }

    protected function setDataFromStdClass(object $object)
    {
        foreach ($object as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}