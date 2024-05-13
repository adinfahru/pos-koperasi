<x-app-layout>
    <div class="container mx-auto px-4 my-4">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-bold pb-2 border-b-2 border-black">Transaction Details</h2>
                        <div class="flex justify-between p-8 border-b-2 border-black">
                            <div class="flex flex-col gap-4">
                                <h1 class="text-gray-600 font-bold">Transaction ID</h1>
                                <h1 class="text-gray-600 font-bold">Customer Name</h1>
                                <h1 class="text-gray-600 font-bold">Date</h1>
                                <h1 class="text-gray-600 font-bold">Hour</h1>
                                <h1 class="text-gray-600 font-bold">Status</h1>
                                <h1 class="text-gray-600 font-bold">Total</h1>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h1 class="text-gray-600 font-semibold">: {{ $transaction->id }}</h1>
                                <h1 class="text-gray-600 font-semibold">: {{ $transaction->customer ? $transaction->customer->name : '' }}</h1>
                                <h1 class="text-gray-600 font-semibold">: {{ $transaction->created_at->timezone('Asia/Jakarta')->format('d-m-Y') }}</h1>
                                <h1 class="text-gray-600 font-semibold">: {{ $transaction->created_at->timezone('Asia/Jakarta')->format('H:i:s') }}</h1>
                                <h1 class="text-gray-600 font-semibold">: {{ $transaction->status }}</h1>
                                <h1 class="text-gray-600 font-semibold">: Rp. {{ $transaction->total }}</h1>
                            </div>
                        </div>
                        <div class="overflow-x-auto mt-3">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-white bg-indigo-600 uppercase border-b">
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
                                        <td class="px-4 py-2">Rp. {{ $detail->subtotal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="/transaction" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Back to Transaction</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>