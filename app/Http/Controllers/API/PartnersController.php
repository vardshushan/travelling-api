<?php

namespace App\Http\Controllers\API;

use App\Models\Content;
use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class PartnersController extends BaseController
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        $partners = Partner::getByDesc();

        return $this->sendResponse($partners, 'All partners');
    }
}



