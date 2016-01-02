<?php
abstract class AbstractModel
{

    static protected $table;

    public static function getTable()
    {
        return self::$table;
    }
}