<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <div class="justify-start gap-3">
            <div class="flex items-center justify-start mb-6">
                <h1 class="text-lg font-semibold">
                    Purchasing Report
                </h1>
            </div>
            <div class="flex items-center justify-end mb-6">
                <form action="{{ route('manager.purchasing') }}" method="GET">
                    <label for="year" class="mr-2">Year:</label>
                    <select name="year" id="year" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @for ($i = date('Y'); $i >= 2020; $i--)
                            <option value="{{ $i }}" {{ $year == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>

                    <label for="month" class="mr-2 ml-4">Month:</label>
                    <select name="month" id="month" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}" {{ $month == $i ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                        @endfor
                    </select>

                    <button type="submit" class="ml-2 rounded-md bg-[#1B4F7C] px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Filter</button>
                </form>
            </div>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
            <div class="w-full overflow-x-auto shadow-xs">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-200 border-b">
                        <th class="px-4 py-3">Kode Barang</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Jumlah</th>
                        <th class="px-4 py-3">Harga Beli</th>
                        <th class="px-4 py-3">Total Pembelian</th>
                        <th class="px-4 py-3">Tanggal Pembelian</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50">
                        @forelse ($purchaseReports as $report)
                        <tr class="text-gray-700 dark:text-gray-600">
                            <td class="px-4 py-3 text-sm uppercase">
                                {{$report->product->code}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$report->product->name}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$report->quantity}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{$report->price}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{$report->total}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$report->purchase_date}}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-sm px-4 py-6 bg-white dark:text-gray-400">
                                Belum ada laporan pembelian!
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>