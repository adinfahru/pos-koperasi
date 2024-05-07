<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full lg:w-3/4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">Transaction Details</h2>
                        <div class="">
                        <p class="text-gray-600"><strong>Transaction ID:</strong> {{ $transaction->id }}</p>
                        <p class="text-gray-600"><strong>Cashier Name:</strong> {{ $transaction->cashier ? $transaction->cashier->name : '' }}</p>
                        <p class="text-gray-600"><strong>Customer Name:</strong> {{ $transaction->customer ? $transaction->customer->name : '' }}</p>
                        <p class="text-gray-600"><strong>Tanggal:</strong> {{ $transaction->created_at->timezone('Asia/Jakarta')->format('d-m-Y') }}</p>
                        <p class="text-gray-600"><strong>Jam:</strong> {{ $transaction->created_at->timezone('Asia/Jakarta')->format('H:i:s') }}</p>
                        <p class="text-gray-600"><strong>Status:</strong> {{ $transaction->status }}</p>
                        <p class="text-gray-600"><strong>Total:</strong> {{ $transaction->total }}</p>
                    </div>
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
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
                                        <td class="px-4 py-2">{{ $detail->product_name }}</td>
                                        <td class="px-4 py-2">{{ $detail->qty }}</td>
                                        <td class="px-4 py-2">{{ $detail->subtotal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="/transaction" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Back to Transaction</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
