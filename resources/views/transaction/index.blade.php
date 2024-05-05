<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <div class="flex items-center justify-end mb-6">
            <a href="{{ route('transaction.create') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add Transaction
            </a>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
                <div class="w-full overflow-x-auto shadow-xs">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase border">
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Total</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td class="px-4 py-3">{{ $transaction->created_at }}</td>
                                <td class="px-4 py-3">{{ $transaction->total }}</td>
                                <td class="px-4 py-3">
                                    <!-- Actions -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>