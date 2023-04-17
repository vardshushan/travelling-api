<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Hotel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function getFlights(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $reports = Flight::select(DB::raw('CONCAT(`from`, "-", `to`) AS from_to, COUNT(*) AS count'))
            ->groupBy('from', 'to')
            ->get();

        return admin_page('reports/flights', compact('reports'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function getHotels(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $reports = Hotel::select(DB::raw("CONCAT(country, ' / ', city) AS address"), 'name', DB::raw("COUNT(*) AS count"))
            ->groupBy('name', 'address')
            ->get();
        return admin_page('reports/hotels', compact('reports'));
    }
}
