<x-app-layout>
    <x-slot name="header">
        {{ __('Selamat Datang ') }} {{ Auth::user()->name }}
    </x-slot>

    @foreach($leaderboard as $entry)
    <p>
        @if ($entry->customer)
        {{ $entry->customer->name }}:
        @else
        Unknown Customer:
        @endif
        {{ $entry->transaction_count }} transactions
    </p>
    @endforeach

    @if ($loggedInCustomerPosition !== null)
    <p>
        Anda saat ini berada di peringkat {{ $loggedInCustomerPosition }} dari total {{ count($leaderboard) }}.
    </p>
    @else
    <p>
        Anda tidak terdaftar di leaderboard.
    </p>
    @endif
</x-app-layout>