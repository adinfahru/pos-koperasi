<!-- resources/views/anggota/transaction_history.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Transaction History of {{ $user->name }}</h1>
    
    <ul>
        @foreach($transactions as $transaction)
            <li>
                Transaction ID: {{ $transaction->id }} <br>
                Total: ${{ $transaction->total }} <br>
                Status: {{ $transaction->status }} <br>
                Transaction Date: {{ $transaction->created_at }} <br>
                <!-- You can loop through transaction details here if needed -->
                <!-- Example: -->
                {{-- @foreach($transaction->transactionDetails as $detail)
                    Product Name: {{ $detail->product_name }} <br>
                    Quantity: {{ $detail->qty }} <br>
                    Subtotal: ${{ $detail->subtotal }} <br>
                @endforeach --}}
            </li>
        @endforeach
    </ul>
@endsection
