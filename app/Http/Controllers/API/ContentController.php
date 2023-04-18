<?php

namespace App\Http\Controllers\API;

use App\Models\Content;
use Illuminate\Http\JsonResponse;

class ContentController extends BaseController
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        $type = request()->query('page');
        $contents = Content::getByDesc()->where('type', $type);

        return $this->sendResponse($contents, 'Content Page.');
    }
}



