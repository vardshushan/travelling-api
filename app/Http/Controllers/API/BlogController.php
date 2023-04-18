<?php

namespace App\Http\Controllers\API;

use App\Models\Blog;
use Illuminate\Http\JsonResponse;

class BlogController extends BaseController
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        $blogs = Blog::getByDesc();

        return $this->sendResponse($blogs, 'All blogs.');
    }
}



