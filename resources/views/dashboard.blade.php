<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>


    <nav class="bg-ciruela border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <h1 class="text-yellow-100 font-roboto font-bold text-3xl">Logo</h1>

            <span class="font-roboto text-yellow-100">{{ date('d-m-Y H:i') }}</span>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                      <span class="font-roboto text-yellow-100 mr-2">Participá de la discución</span>

                      <button class="px-4 rounded-lg p-2 bg-gradient-to-r from-magenta to-frambuesa hover:from-frambuesa hover:to-magenta text-yellow-100 transition-colors duration-1000 ease-in">Foro</button>

                    </li>
                    <li>
                      <span class="font-roboto text-yellow-100 mr-2">Sos líder comunitario?</span>
                      <button class="rounded-lg p-2 bg-gradient-to-r from-magenta to-frambuesa hover:from-frambuesa hover:to-magenta animate-pulse hover:animate-none text-yellow-100 transition-colors duration-1000 ease-in">Portal de Políticas Públicas</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<main>


<div class="fixed left-0 bottom-0 ml-4 mb-4 rounded-lg w-1/3 bg-frambuesa/50 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-black">
        <thead class="text-xs text-black uppercase">
            <tr>
                <th scope="col" class="px-6 py-3 bg-yellow-200/50">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3 bg-yellow-200/50">
                    Category
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4 bg-yellow-200/50">
                    Laptop
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4 bg-yellow-200/50">
                    Laptop PC
                </td>
            </tr>
            <tr class="border-b border-gray-200 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4 bg-yellow-200/50">
                    Accessories
                </td>
            </tr>
            <tr class="border-b border-gray-200 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                    Google Pixel Phone
                </th>
                <td class="px-6 py-4">
                    Gray
                </td>
                <td class="px-6 py-4 bg-yellow-200/50">
                    Phone
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-yellow-200/50">
                    Apple Watch 5
                </th>
                <td class="px-6 py-4">
                    Red
                </td>
                <td class="px-6 py-4 bg-yellow-200/50">
                    Wearables
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="fixed bottom-0 right-0 mr-4 mb-4">
  <div class="w-full h-6 bg-gray-200 rounded-full dark:bg-gray-700">
    <div class="h-6 bg-blue-600 rounded-full dark:bg-blue-500" style="width: 70%"></div>
  </div>
  <div class="mb-1 text-lg font-roboto font-bold">Factor de riesgo: Normal</div>

</div>

</main>
</body>

</html>
