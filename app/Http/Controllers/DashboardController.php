<?php

namespace App\Http\Controllers;

use App\Services\MaximoPorCompuestoService;
use App\Services\NasaPowerService;

class DashboardController extends Controller
{
    public function index() {
        $nasaApi = new NasaPowerService();
        $data = $nasaApi->fetchData(-33.293936, -66.330087, '20250630', '20250630', 'AOD_55_ADJ%2CTO3');
        
        $maximos = new MaximoPorCompuestoService();
        $data['max'] = $maximos->getValues();
        return view('dashboard', ['data' => $data]);
    }
}
