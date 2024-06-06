<x-app-layout>
    <div class="container mx-auto px-4 "> <!-- Added container class -->
        <div class="flex justify-center">
            <div class="w-full lg:w-2/4">
                <div class="mt-6 relative overflow-x-auto border shadow-lg p-2 sm:rounded-lg"> <!-- Added classes -->
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"> <!-- Added classes -->
                        <caption class="p-1 text-xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-black dark:bg-white"> <!-- Added classes -->
                            Transaction Details <!-- Adjusted heading -->
                            <hr class="mt-4 mb-4 border-b-2 border-black dark:border-black" />
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-black dark:bg-white">
                                </caption>

                                <hr class="mt-4 mb-4 border-b-1 border-gray-400 dark:border-gray-600" />
                                <tbody>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Transaction ID:</strong></th>
                                        <td class="text-right px-20 py-2">{{ $transaction->id }}</td>
                                    </tr>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Customer Name:</strong></th>
                                        <td class="text-right px-20 py-2">{{ $transaction->customer ? $transaction->customer->name : '' }}</td>
                                    </tr>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Tanggal:</strong></th>
                                        <td class="text-right px-20 py-2">{{ $transaction->created_at->timezone('Asia/Jakarta')->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Jam:</strong></th>
                                        <td class="text-right px-20 py-2">{{ $transaction->created_at->timezone('Asia/Jakarta')->format('H:i:s') }}</td>
                                    </tr>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Status:</strong></th>
                                        <td class="text-right px-20 py-2 capitalize">{{ $transaction->status }}</td>
                                    </tr>
                                    <tr class="text-gray-500 dark:text-gray-600">
                                        <th class="text-left px-8 py-2"><strong>Total:</strong></th>
                                        <td class="text-right px-20 py-2">{{ format_rupiah($transaction->total) }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr class="mt-4 mb-4 border-b-2 border-black dark:border-black" />


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
                                <td class="px-4 py-2 text-black">{{ format_rupiah($detail->subtotal) }}</td>
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