<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <div class="flex justify-start gap-3">
            <div class="flex items-center justify-end mb-6">
                <h1 class="text-lg font-semibold">
                    Purchasing Report
                </h1>
            </div>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
            <div class="w-full overflow-x-auto shadow-xs">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-200 border-b">
                        <th class="px-4 py-3">Kode Barang</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Stok</th>
                        <th class="px-4 py-3">Harga Beli</th>
                        <th class="px-4 py-3">Tanggal Pembelian</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50">
                        @forelse ($products as $product)
                        <tr class="text-gray-700 dark:text-gray-600">
                            <td class="px-4 py-3 text-sm uppercase">
                                {{$product->code}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->name}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->stock}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{$product->purchase * $product->stock}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->purchasing_date}}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-sm px-4 py-6 bg-white dark:text-gray-400">
                                Belum ada produk!
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>