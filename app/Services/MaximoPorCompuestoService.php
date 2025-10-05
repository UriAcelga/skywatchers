<?php

namespace App\Services;

class MaximoPorCompuestoService{
    public function getValues() {
        return [
            'O3' => 0.07,
            'NO2' => 0.1,
            'SO2' => 0.075,
            'PM25' => 0.065
        ];
    }
}