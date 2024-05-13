<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border text-xs">
        <div class="flex items-center justify-end mb-6">
            <a href="{{ route('transaction.create') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add Transaction
            </a>
        </div>
        <div class="container">
            <form action="{{ route('transactions.filter') }}" method="GET">
                <div class="flex space-x-4 mb-5">
                    <div>
                        <label class="text-sm p-2 font-medium leading-6 text-gray-900">Start Date: </label>
                        <input type="date" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="start_date">
                    </div>
                    <div>
                        <label class="text-sm p-2 font-medium leading-6 text-gray-900">End Date: </label>
                        <input type="date" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="end_date">
                    </div>
                    <div>
                        <button type="submit" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Filter</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase border">
                    <th class="px-4 py-3">Transaksi ID</th>
                    <th class="px-4 py-3">Tanggal & Jam</th>
                    <th class="px-4 py-3">Customer</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Total</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td class="px-4 py-3">{{ $transaction->id }}</td>
                    <td class="px-4 py-3">{{ $transaction->created_at->timezone('Asia/Jakarta')->format('Y-m-d - H:i:s') }}</td>
                    <td class="px-4 py-3">{{ $transaction->customer? $transaction->customer->name : '' }}</td>
                    <td class="px-4 py-3 capitalize">{{ $transaction->status }}</td>
                    <td class="px-4 py-3">{{ $transaction->total }}</td>
                    <td class="px-4 py-3">
                        <a href="{{ route('transaction.show', $transaction->id) }}" class="rounded-md bg-teal-500 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-indigo-500">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $transactions->links() }}
        </div>
    </div>
</x-app-layout>