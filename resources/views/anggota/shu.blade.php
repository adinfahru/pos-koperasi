<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mx-auto">
        Simpanan Hasil Usaha (SHU)
        </h2>
    </x-slot>

    <div class="px-8 py-6 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="bg-white p-3 overflow-hidden border shadow-xl rounded-xl flex items-center flex-col justify-center">
                <h1 class="text-center text-lg">Total Point Anda</h1>
                <br>
                <h1 class="text-center text-3xl">{{ $totalCustomerPoints }}</h1>
            </div>
            <div class="bg-white w-96 h-40 p-5 overflow-hidden border shadow-xl rounded-xl flex items-center flex-col justify-center">
                <h1 class="text-center text-xl">Nilai SHU Anda</h1>
                <br>
                <h1 class="text-center text-3xl">Rp {{ $formattedShu }}</h1>
            </div>
        </div>
    </div>
</x-app-layout>