<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite('resources/css/app.css')
</head>

<body>
    <img src="{{ asset('images/RenderData.jpg') }}" alt="Imagen de fondo"
        class="absolute inset-0 h-full w-full object-cover z-0 blur-sm opacity-80">
    <div class="absolute top-0 left-0 w-1/6 mt-8 ml-8 bg-gray-600/60 rounded-lg p-4">
        <img src="{{ asset('images/logo_oscuro.png') }}" alt="logo" class="opacity-100">
    </div>

    <div class="relative min-h-screen flex flex-col items-center justify-center ">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 min-w-1/2 text-center bg-white opacity-80 rounded-lg">
            <h1 class="text-frambuesa text-6xl my-2 font-roboto font-bold">AirHealth</h1>
            <h2 class="text-orange-600 text-3xl mb-4 font-roboto font-bold">Analize air quality in your city</h1>
        </div>
        <form class="max-w-xl w-4/5" action="" method="get">
            @csrf

            <div class="flex">

                <label for="provincias" class="sr-only">Elige una provincia</label>
                <select id="provincias"
                    class=" bg-gray-700 border border-gray-600 text-white text-lg border-s-gray-700 border-s-2 rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-36 p-2.5 ">
                    @php
                        $provincias_localidades = 
                        [
                            'Buenos Aires' => ['La Plata', 'Mar del Plata'],
                            'Catamarca' => ['San Fernando del Valle de Catamarca', 'Fiambalá'],
                            'Chaco' => ['Resistencia', 'Presidencia Roque Sáenz Peña'],
                            'Chubut' => ['Rawson', 'Comodoro Rivadavia'],
                            'Córdoba' => ['Ciudad de Córdoba', 'Villa Carlos Paz'],
                            'Corrientes' => ['Ciudad de Corrientes', 'Goya'],
                            'Entre Ríos' => ['Paraná', 'Gualeguaychú'],
                            'Formosa' => ['Formosa', 'Clorinda'],
                            'Jujuy' => ['San Salvador de Jujuy', 'Purmamarca'],
                            'La Pampa' => ['Santa Rosa', 'General Pico'],
                            'La Rioja' => ['Ciudad de La Rioja', 'Chilecito'],
                            'Mendoza' => ['Ciudad de Mendoza', 'San Rafael'],
                            'Misiones' => ['Posadas', 'Puerto Iguazú'],
                            'Neuquén' => ['Neuquén Capital', 'San Martín de los Andes'],
                            'Río Negro' => ['Viedma', 'Bariloche'],
                            'Salta' => ['Ciudad de Salta', 'Cafayate'],
                            'San Juan' => ['Ciudad de San Juan', 'Jáchal'],
                            'San Luis' => ["San Luis", "Villa Mercedes", "Villa de Merlo", "La Punta", "Juana Koslay", "Justo Daract", "Quines", "La Toma", "Santa Rosa del Conlara", "Tilisarao"],
                            'Santa Cruz' => ['Río Gallegos', 'El Calafate'],
                            'Santa Fe' => ['Ciudad de Santa Fe', 'Rosario'],
                            'Santiago del Estero' => ['Santiago del Estero', 'Termas de Río Hondo'],
                            'Tierra del Fuego' => ['Ushuaia', 'Río Grande'],
                            'Tucumán' => ['San Miguel de Tucumán', 'Tafí del Valle'],
                        ];
                        $provincias = array_keys($provincias_localidades);
                        $provincias_snake_case = array_map( fn($str) => str_replace(' ', '_', strtolower($str)), $provincias);
                    @endphp
                    @for ($i = 0; $i < count($provincias = array_keys($provincias_localidades)); $i++)
                    
                        <option value="{{ $provincias[$i] }}"
                        @if ($i == 0) 
                        selected
                        @endif
                        >{{$provincias[$i]}}</option>
                        
                        

                    @endfor
                    
                </select>
                <label for="localidades" class="sr-only">Elige una localidad</label>
                <select id="localidades"
                    class="bg-gray-700 border border-gray-600 text-white text-lg border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="" selected disabled>Select a city</option>
                    @foreach ($provincias_localidades['San Luis'] as $localidad)
                    <option value="{{ $localidad }}">{{ $localidad }}</option>
                    @endforeach
                </select>
                <a href="{{ url('/dashboard')}}">
                    <button type="button"
                        class="h-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange'700 font-medium rounded-r-lg text-sm px-4 py-2 text-xl">Search</button>

                </a>

            </div>

        </form>

        <footer>
            <p class="text-white mx-auto absolute bottom-0 mb-8 -translate-x-1/2">SkyWatchers_ - NASA Space Apps
                Challenge 2025 @ All rights reserved</p>
        </footer>
    </div>
    </div>
    <script>
        const data = {
            provincias: [],
            localidades: []
        }

        const selectProvincias = document.getElementById('provincias');
        const selectLocalidades = document.getElementById('localidades');

        selectProvincias.addEventListener('change', function() {
            const provinciaSeleccionada = this.value;
        })
    </script>
</body>
</html>
