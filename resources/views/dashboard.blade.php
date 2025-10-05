<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-ciruela border-gray-200 z-10 relative">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.PNG') }}" class="h-10" alt="logo AirHealth">
            <span class="font-roboto text-yellow-100 ml-4">{{ date('Y/m/d H:i') }}</span>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <span class="font-roboto text-yellow-100 mr-2">Join the discussion</span>

                        <button
                            class="px-4 rounded-lg p-2 bg-gradient-to-r from-magenta to-frambuesa hover:from-frambuesa hover:to-magenta text-yellow-100 transition-colors duration-1000 ease-in">Forum</button>

                    </li>
                    <li>
                        <span class="font-roboto text-yellow-100 mr-2">Are you a community leader?</span>
                        <button
                            class="rounded-lg p-2 bg-gradient-to-r from-magenta to-frambuesa hover:from-frambuesa hover:to-magenta animate-pulse hover:animate-none text-yellow-100 transition-colors duration-1000 ease-in">Public
                            Policy Portal</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <img src="{{ asset('images/SAN_LUIS.jpg') }}" alt="Imagen de fondo"
        class="absolute inset-0 h-full w-full object-cover z-0">
    <main>
        <div class="fixed right-0 mr-4 mt-4 rounded-lg bg-yellow-100 w-1/6 font-bold font-roboto">
            <ul class="ml-4">
                <li class="flex"><img src="{{asset('images/color-cronico.svg')}}" class="w-2 mr-2"> <span class="text-cronicos">Mortality rate from chronic respiratory diseases</span></li>
                <li class="flex"><img src="{{asset('images/color-gas1.svg')}}" class="w-2 mr-2 text-color_gas1"> <span class="text-gas2">NO<sub>2</sub></span></li>
                <li class="flex"><img src="{{asset('images/color-gas2.svg')}}" class="w-2 mr-2 text-color_gas2"> <span class="text-gas3">PM 2.5</span></li>
            </ul>
        </div>

        <div
            class="fixed left-0 bottom-0 ml-4 mb-4 rounded-lg w-1/3 bg-frambuesa/50 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-xs text-black uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-yellow-200/50">
                            Compound
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Measurement
                        </th>
                        <th scope="col" class="px-6 py-3 bg-yellow-200/50">
                            Maximum tolerable threshold
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                            NO<sub>2</sub>
                        </th>
                        <td class="px-6 py-4">
                            11 μg/m3
                        </td>
                        <td class="px-6 py-4 bg-yellow-200/50">
                            {{ $data['max']['NO2'] }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                            SO<sub>2</sub>
                        </th>
                        <td class="px-6 py-4">
                            22 μg/m3
                        </td>
                        <td class="px-6 py-4 bg-yellow-200/50">
                            {{ $data['max']['SO2'] }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 ">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                            O<sub>3</sub>
                        </th>
                        <td class="px-6 py-4">
                            33.7 μg/m3
                        </td>
                        <td class="px-6 py-4 bg-yellow-200/50">
                            {{ $data['max']['O3'] }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 ">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                            PM2.5
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['PM25'] }} mg/m3
                        </td>
                        <td class="px-6 py-4 bg-yellow-200/50">
                            {{ $data['max']['PM25'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="block w-full p-6 bg-gray-600 border border-gray-200 rounded-b-lg shadow-sm opacity-90">
                <span class="text-white font-bold">Mortality rate from chronic respiratory diseases: ~14.85 / 100,000 Habitants</span>
            </div>
        </div>
        <div class="fixed bottom-0 right-0 mr-4 mb-12 w-1/3 opacity-95">
            <div
                class="block w-full p-6 bg-yellow-100 border border-gray-200 rounded-lg shadow-sm">

                <x-progress-bar-riesgo riesgo="medio"></x-progress-bar-riesgo>
                <div
                    class="block max-w-sm p-6 bg-orange-500 border border-gray-200 rounded-lg shadow-sm">
                    <img src="{{ asset("images/warning.svg") }}" class="w-8">
                    <span class="font-bold">Warning:</span> Avoid being outdoors for more than 2 hours at a time
                </div>
            </div>



        </div>
    </main>
</body>

</html>
