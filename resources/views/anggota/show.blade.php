<x-app-layout>
    <div class="container mx-auto px-4"> <!-- Added container class -->
        <div class="flex justify-center">
            <div class="w-full lg:w-3/4">
                <div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg"> <!-- Added classes -->
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"> <!-- Added classes -->
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-black dark:bg-white"> <!-- Added classes -->
                            Transaction Details <!-- Adjusted heading -->
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400""><strong>Transaction ID:</strong> {{ $transaction->id }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Cashier Name:</strong> {{ $transaction->cashier ? $transaction->cashier->name : '' }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Customer Name:</strong> {{ $transaction->customer ? $transaction->customer->name : '' }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Tanggal:</strong> {{ $transaction->created_at->timezone('Asia/Jakarta')->format('d-m-Y') }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Jam:</strong> {{ $transaction->created_at->timezone('Asia/Jakarta')->format('H:i:s') }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Status:</strong> {{ $transaction->status }}</p>
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400"><strong>Total:</strong> {{ $transaction->total }}</p>
                        </caption>
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase border-b">
                                <th class="px-4 py-3">Product Name</th>
                                <th class="px-4 py-3">Quantity</th>
                                <th class="px-4 py-3">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach ($transaction_detail as $detail)
                            <tr>
                                <td class="px-4 py-2 text-black">{{ $detail->product_name }}</td>
                                <td class="px-4 py-2 text-black">{{ $detail->qty }}</td>
                                <td class="px-4 py-2 text-black">{{ $detail->subtotal }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <a href="{{ route('anggota.history') }}" class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-teal-500 text-xs font-semibold">Back to Transaction</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
