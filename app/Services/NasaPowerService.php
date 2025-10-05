<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;


class NasaPowerService {
    protected string $baseUrl = "https://power.larc.nasa.gov/api/temporal/hourly/point";

    public function fetchData(float $latitud, float $longitud, string $fecha_1, string $fecha_2, string $params) {
        /*$response = Http::get($this->baseUrl, [
            'start' => $fecha_1 ?? '20250629',
            'end' => $fecha_2 ?? '20250629',
            'latitude' => $latitud ?? -33.293936,
            'longitude' => $longitud ?? -66.330087,
            'community' => 'ag',
            'parameters' => $params ?? 'TO3',
            'format' => 'json'
        ]);*/
        $response = Http::get("https://power.larc.nasa.gov/api/temporal/hourly/point?start=20250620&end=20250629&latitude=-33.293936&longitude=-66.330087&community=ag&parameters=AOD_55_ADJ%2CTO3&format=json&header=true");

        if($response->failed()) {
            throw new Exception("Error al conectar con la API NASA POWER. {$response->status()}");
        }

        if(!$response->ok()){
            throw new Exception("Respuesta inesperada. {$response->status()}");
        }


        $data = $response->json();
        return $this->curarDatos($data);
    }

    protected function curarDatos(array $data) {
        return [
            'PM25' => end($data["properties"]["parameter"]["AOD_55_ADJ"]),
            'O3' => end($data["properties"]["parameter"]["TO3"])
        ];
    }
}