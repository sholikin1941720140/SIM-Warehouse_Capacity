<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTerpakai = DB::table('materials')->sum('total_volume');
        $totalTersedia = DB::table('raks as r')
                            ->leftJoin('materials as m', 'r.id', '=', 'm.rak_id')
                            ->selectRaw('SUM(r.volume) - COALESCE(SUM(m.total_volume), 0) as total_tersedia')
                            ->first()->total_tersedia;
    
        //pastikan total tersedia tidak kurang dari 0
        $totalTersedia = max($totalTersedia, 0);

        return view('dashboard', compact('totalTerpakai', 'totalTersedia'));
    }
}
