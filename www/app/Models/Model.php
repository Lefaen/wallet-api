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
abstract class Model implements _Model
{
    /**
     * @var string
     */
    protected string $table = '';

    /**
     * @var _Database
     */
    protected _Database $database;

    /**
     *
     */
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param int $id
     * @param array $fields
     * @return static
     */
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

    /**
     * @param string $column
     * @param $value
     * @param $fields
     * @return static
     */
    public static function getFirstIdByColumn(string $column, $value, $fields = []): static
    {
        $model = new static();
        if (empty($fields)) {
            $select = '*';
        } else {
            $select = implode(',', $fields);
        }
        $object = $model->database->query('select '.$select.' from '.$model->table.' where '.$column.'=?', [$value]);
        $model->setDataFromStdClass($object);
        return $model;
    }

    /**
     * @param array $params
     * @param int $id
     * @return static
     */
    public static function updateById(array $params, int $id): static
    {
        $model = new static();

        return $model;
    }

    /**
     * @param array $params
     * @return static
     */
    public static function insert(array $params): static
    {
        $model = new static();
        $keys = array_keys($params);
        $keys = implode(',', $keys);
        $values = implode(',', $params);
        $model->database->query('insert into '. $model->table . "($keys) values ($values)");
        return $model;
    }

    /**
     * @param object $object
     * @return void
     */
    protected function setDataFromStdClass(object $object)
    {
        foreach ($object as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}