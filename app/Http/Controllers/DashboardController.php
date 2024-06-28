<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse; // Menggunakan model yang benar

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil total kapasitas dan kapasitas yang terpakai dari tabel kapasitas_warehouses
        $totalCapacity = Warehouse::sum('total_capacity');
        $usedCapacity = Warehouse::sum('use_capacity');
        $freeCapacity = $totalCapacity - $usedCapacity;

        $data = [
            'total' => $totalCapacity,
            'used' => $usedCapacity,
            'free' => $freeCapacity
        ];

        return view('dashboard')->with('data', $data);
    }
}
