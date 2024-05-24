<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Simpanan Hasil Usaha (SHU)
        </h2>
    </x-slot>

    <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="bg-white w-96 h-40 p-5 overflow-hidden border shadow-xl rounded-xl flex justify-start items-center flex-col">
                <h1 class="text-center text-xl">Total Transaksi</h1>
                <br>
                <h1 class="text-center text-4xl">{{ $totalTransactions }}</h1>
            </div>
            <div class="bg-white w-96 h-40 p-5 overflow-hidden border shadow-xl rounded-xl flex justify-start items-center flex-col">
                <h1 class="text-center text-xl">Nilai SHU Anda</h1>
                <br>
                <h1 class="text-center text-4xl">Rp {{ $formattedShu }}</h1>
            </div>
        </div>
    </div>
</x-app-layout>