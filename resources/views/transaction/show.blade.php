<x-app-layout>
    <div class="container mx-auto px-4 mt-5">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-white shadow-lg rounded-xl overflow-hidden flex flex-col gap-4 pb-2">
                    <div class="p-4 flex flex-col gap-3">
                        <h2 class="text-xl font-bold mb-2 text-[#1B4F7C]">Transaction Details</h2>
                        <div class="flex gap-16 border-t-2 py-5">
                            <div class="flex flex-col gap-2">
                                <p class="text-gray-600 font-semibold">Transaction ID</p>
                                <p class="text-gray-600 font-semibold">Customer Name</p>
                                <p class="text-gray-600 font-semibold">Date</p>
                                <p class="text-gray-600 font-semibold">Hour</p>
                                <p class="text-gray-600 font-semibold">Status</p>
                                <p class="text-gray-600 font-semibold">Total</p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <p class="text-gray-600">: {{ $transaction->id }}</p>
                                <p class="text-gray-600">: {{ $transaction->customer ? $transaction->customer->name : '' }}</p>
                                <p class="text-gray-600">: {{ $transaction->created_at->timezone('Asia/Jakarta')->format('d-m-Y') }}</p>
                                <p class="text-gray-600">: {{ $transaction->created_at->timezone('Asia/Jakarta')->format('H:i:s') }}</p>
                                <p class="text-gray-600">: {{ $transaction->status }}</p>
                                <p class="text-gray-600">: {{ $transaction->total }}</p>
                            </div>
                        </div>
                        <div class="overflow-x-auto rounded-lg shadow-lg">
                            <table class="w-full whitespace-no-wrap mb-1">
                                <thead>
                                    <tr class=" text-sm font-bold tracking-wide text-left text-blue-900 bg-blue-200 uppercase border-b">
                                        <th class="px-4 py-3">Product Name</th>
                                        <th class="px-4 py-3">Quantity</th>
                                        <th class="px-4 py-3">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @foreach ($transaction_detail as $detail)
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">{{ $detail->product_name }}</td>
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
