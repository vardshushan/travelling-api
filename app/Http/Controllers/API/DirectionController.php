<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\DirectionRequest;
use App\Models\Direction;
use App\Services\DirectionService;

class DirectionController extends Controller
{
    public function getAllDirections()
    {
        return Direction::all();
    }

    public function createDirection(DirectionRequest $request, DirectionService $service)
    {
        $validatedData = $request->validated();
        return $service->create($validatedData);
    }

    public function updateDirection(DirectionRequest $request, DirectionService $service, $id)
    {
        $validatedData = $request->validated();
        return $service->update($validatedData, $id);
    }

    public function deleteDirection(DirectionService $service, $id)
    {
     return $service->delete($id);
    }
}
