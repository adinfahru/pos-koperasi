<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border text-xs">
        <div class="flex items-center justify-between mb-6">
            <div class="flex gap-4 px-4 py-2 rounded-full shadow-xl">
                <img src="/images/transaction.png" alt="" width="30px" height="30px">
                <h1 class="text-lg font-semibold">
                    Transaction Details
                </h1>
            </div>
            
            <a href="{{ route('transaction.create') }}" class="rounded-md shadow-xl bg-[#1B4F7C] px-6 py-2 text-sm font-semibold text-white hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add Transaction
            </a>
        </div>
        
        <div class="container px-3">
            <form action="{{ route('transactions.filter') }}" method="GET">
                <div class="flex mb-5 gap-5">
                    <div>
                        <label class="text-sm p-2 font-medium leading-6 text-gray-900">Start Date: </label>
                        <input type="date" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="start_date">
                    </div>
                    <div>
                        <label class="text-sm p-2 font-medium leading-6 text-gray-900">End Date: </label>
                        <input type="date" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="end_date">
                    </div>
                    <div>
                        <button type="submit" class="rounded-md bg-[#1B4F7C] px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Filter</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg border">
            <div class="w-full overflow-x-auto shadow-xs">
                <table class="w-full whitespace-no-wrap shadow-xl text-sm text-center rtl:text-right text-gray-500">
                    <thead class="text-xs font-semibold tracking-wide text-center text-white bg-[#1B4F7C] uppercase">
                        <tr class="">
                            <th class="px-4 py-3 text-left w-[150px]">Transaction ID</th>
                            <th class="px-4 py-3">Date & Hour</th>
                            <th class="px-4 py-3">Customer Name</th>
                            <th class="px-4 py-3">Transaction Status</th>
                            <th class="px-4 py-3">Total</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td class="px-4 py-3 text-left">{{ $transaction->id }}</td>
                            <td class="px-4 py-3">{{ $transaction->created_at->timezone('Asia/Jakarta')->format('Y-m-d - H:i:s') }}</td>
                            <td class="px-4 py-3">{{ $transaction->customer? $transaction->customer->name : '' }}</td>
                            <td class="px-16 py-3 capitalize {{ $transaction->status == 'selesai' ? 'text-green-500 font-bold' : ($transaction->status == 'pending' ? 'text-yellow-500' : 'text-red-500') }}">
                                <div class=" {{ $transaction->status == 'selesai' ? 'bg-green-200 py-1 rounded-full ' : ($transaction->status == 'pending' ? 'bg-yellow-200' : 'bg-red-200') }}">
                                    {{ $transaction->status }}
                                </div>
                            </td>
                            <td class="px-4 py-3">Rp. {{ format_rupiah($transaction->total)}}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('transaction.show', $transaction->id) }}" class="rounded-md bg-teal-500 px-4 py-2 text-xs font-semibold text-white shadow-sm hover:bg-[#1B4F7C]">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            {{ $transactions->links() }}
        </div>
    </div>
</x-app-layout>
