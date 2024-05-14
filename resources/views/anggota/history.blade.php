<x-app-layout>
<h1>Transaction History</h1>
<h1>Total Transaksi ({{ $totalTransactions }})</h1>

@if ($transactions->count() > 0)
<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Total Belanja</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
        <tr>
            <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
            <td>{{ $transaction->total }}</td>
            <td>{{ $transaction->status }}</td>
            <td>
                <a href="{{ route('anggota.show', $transaction->id) }}" class="rounded-md bg-teal-500 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-indigo-500">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $transactions->links() }}
@else
<p>No transactions found.</p>
@endif
</x-app-layout>
