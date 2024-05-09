<x-app-layout>
    <body class='bg-gray-100'>
        <div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-black dark:bg-white">
                    Transaction History
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Total Transaksi: {{$totalTransactions}}</p>
                </caption>
                @if ($transactions->count() > 0)
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-200 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Belanja
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr class="bg-white border-b dark:bg-white dark:border-white">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            {{ $transaction->created_at->format('Y-m-d')}}
                        </td>
                        <td class="px-6 py-4 dark:text-black">
                            {{ $transaction->total}}
                        </td>
                        <td class="px-6 py-4 dark:text-black">
                            {{ $transaction->status}}
                        </td>
                        <td class="px-6 py-4"> <!-- Adjusted alignment -->
                            <a href="{{ route('anggota.show', $transaction->id) }}" class="rounded-md bg-indigo-500 p-1 text-xs font-semibold text-white shadow-sm hover:bg-teal-500">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <tfoot>
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center">
                            <p class="text-gray-500 dark:text-gray-400">No transactions found.</p>
                        </td>
                    </tr>
                </tfoot>
                @endif
            </table>
            {{$transactions->links()}}
        </div>
    </body>
</x-app-layout>
