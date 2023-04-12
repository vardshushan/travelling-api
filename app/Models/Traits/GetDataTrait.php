<?php

namespace App\Models\Traits;

trait GetDataTrait
{
    /**
     * @param string $column
     * @return mixed
     */
    public static function getByDesc(string $column = 'id')
    {
        return static::query()->orderByDesc($column)->get();
    }

    /**
     * @return mixed
     */
    public static function getOrdered()
    {
        return static::query()->orderBy('order')->get();
    }
}
