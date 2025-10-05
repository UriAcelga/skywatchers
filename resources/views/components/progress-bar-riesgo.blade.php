@props(['riesgo'])

    <div class="w-full h-6 mb-16 bg-gray-200 rounded-full ">
        @if ($riesgo === 'bajo')
        <div class="h-6 bg-blue-600 rounded-full" style="width: 15%"></div>
        <div class="mb-1 text-lg font-roboto font-bold">Risk Factor (EHRI): Low (15%)</div>
        
        @elseif ($riesgo === 'medio')
        <div class="h-6 bg-orange-500 rounded-full" style="width: 50%"></div>
        <div class="mb-1 text-lg font-roboto font-bold">Risk Factor (EHRI): Moderate (45%)</div>
        
        @else
        <div class="h-6 bg-red-800 rounded-full" style="width: 90%"></div>
        <div class="mb-1 text-lg font-roboto font-bold">Risk Factor (EHRI): High (90%)</div>
            
        @endif
    </div>


