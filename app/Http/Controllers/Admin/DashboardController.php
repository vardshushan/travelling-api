<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
