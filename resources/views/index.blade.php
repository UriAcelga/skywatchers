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

    <div class="relative min-h-screen flex flex-col items-center justify-center">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 p-4 min-w-4/5 text-center">
            <h1 class="text-frambuesa text-6xl mb-6 font-roboto font-bold">Buscá por localidad</h1>
        </div>
        <form class="max-w-xl w-4/5" action="#" method="post">
            @csrf

            <div class="flex">

                <label for="provincias" class="sr-only">Elige una provincia</label>
                <select id="provincias"
                    class=" bg-gray-700 border border-gray-600 text-white text-sm border-s-gray-700 border-s-2 rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-36 p-2.5 ">
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
                    
                        <option value="{{ $provincias_snake_case[$i] }}"
                        @if ($i == 0) 
                        selected
                        @endif
                        >{{$provincias[$i]}}</option>
                        
                        

                    @endfor
                    
                </select>
                <label for="localidades" class="sr-only">Elige una localidad</label>
                <select id="localidades"
                    class="bg-gray-700 border border-gray-600 text-white text-sm border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="" selected disabled>Elige una localidad</option>
                    @foreach ($provincias_localidades['San Luis'] as $localidad)
                    <option value="{{ $loop->iteration }}">{{ $localidad }}</option>
                    @endforeach
                </select>
                <button type="submit"
                    class="text-white bg-frambuesa hover:bg-frambuesa_oscuro focus:ring-4 focus:outline-none focus:ring-frambuesa_oscuro font-medium rounded-r-lg text-sm px-4 py-2 text-xl">Search</button>

            </div>


            <label for="default-search"
                class="mb-2 text-sm font-medium text-frambuesa sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none w-4/5">
                    <svg class="w-4 h-4 text-frambuesa" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-white border border-frambuesa_oscuro rounded-lg bg-gray-700 focus:ring-frambuesa focus:border-frambuesa opacity-80 text-xl"
                    placeholder="Search Mockups, Logos..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-frambuesa hover:bg-frambuesa_oscuro focus:ring-4 focus:outline-none focus:ring-frambuesa_oscuro font-medium rounded-lg text-sm px-4 py-2 text-xl">Search</button>
            </div>

        </form>

        <footer>
            <p class="text-white mx-auto absolute bottom-0 mb-8 -translate-x-1/2">SkyWatchers_ - NASA Space Apps
                Challenge 2025 @ Todos los derechos reservados</p>
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
