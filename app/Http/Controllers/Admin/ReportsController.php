<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Hotel;
use http\Client\Request;
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
        $start = request()->query('start');
        $end = request()->query('end');

        $reports = Flight::select(DB::raw('CONCAT(`from`, "-", `to`) AS from_to, COUNT(*) AS count'))
            ->where(function($query) use ($start, $end) {
                if (!empty($start)) {
                    $query->where('created_at', '>', $start.' 00:00:00');
                }
                if (!empty($end)) {
                    $query->where('created_at', '<=',  $end.' 23:59:59');
                }
                if (!empty($start) && !empty($end)) {
                    $query->whereBetween('created_at', [$start.' 00:00:00', $end.' 23:59:59']);
                }
            })
            ->groupBy('from', 'to')
            ->get();

        return admin_page('reports/flights', compact('reports', 'start', 'end'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function getHotels(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $start = request()->query('start');
        $end = request()->query('end');

        $reports = Hotel::select(DB::raw("CONCAT(country, ' / ', city) AS address"), 'name', DB::raw("COUNT(*) AS count"))
            ->where(function($query) use ($start, $end) {
                if (!empty($start)) {
                    $query->where('created_at', '>', $start.' 00:00:00');
                }
                if (!empty($end)) {
                    $query->where('created_at', '<=',  $end.' 23:59:59');
                }
                if (!empty($start) && !empty($end)) {
                    $query->whereBetween('created_at', [$start.' 00:00:00', $end.' 23:59:59']);
                }
            })
            ->groupBy('name', 'address')
            ->get();
        return admin_page('reports/hotels', compact('reports', 'start', 'end'));
    }
}
