<?php

namespace App\Services;


use App\Models\Direction;

class DirectionService
{
    public function create($data)
    {
        return Direction::create($data);
    }


    public function update($data, $id)
    {
        Direction::where('id', $id)->update($data);
        return Direction::where('id', $id)->first();
    }

    public function delete($id)
    {
        return Direction::where('id', $id)->delete();
    }
}
