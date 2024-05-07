<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Simpanan Hasil Usaha (SHU)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1>Total Transaksi {{ $totalTransactions }} x Rp. 1000</h1>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>Nilai SHU Anda berdasarkan jumlah transaksi: Rp {{ $formattedShu }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
