<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get leaderboard data
        $leaderboard = $this->getLeaderboard();

        // Find the position of the logged-in customer
        $loggedInCustomerId = auth()->id();
        $loggedInCustomerPosition = null;

        foreach ($leaderboard as $index => $entry) {
            if ($entry->customer && $entry->customer->id === $loggedInCustomerId) {
                $loggedInCustomerPosition = $index + 1; // Positions start from 1, not 0
                break;
            }
        }

        // Pass the leaderboard data and the position of the logged-in customer to the view
        return view('anggota.dashboard', compact('leaderboard', 'loggedInCustomerPosition'));
    }

    /**
     * Get leaderboard data based on the number of transactions per customer.
     */
    private function getLeaderboard()
    {
        // Group transactions by customer_id and count the number of transactions for each customer
        $leaderboard = Transaction::select('customer_id')
            ->selectRaw('count(*) as transaction_count')
            ->groupBy('customer_id')
            ->orderByDesc('transaction_count')
            ->get();

        // Optionally, you can load the customer details if needed
        $leaderboard->load('customer');

        return $leaderboard;
    }

    public function history()
    {
        $transactions = Transaction::where('customer_id', auth()->user()->id)->with('customer')->orderBy('created_at', 'desc')->paginate(10);
        $totalTransactions = Transaction::where('customer_id', auth()->user()->id)->count();
        return view('anggota.history', compact('transactions', 'totalTransactions'));
    }
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction_detail = TransactionDetail::where('transaction_id', $id)->get();
        return view('anggota.show', compact('transaction', 'transaction_detail'));
    }

    public function shu()
    {
        // Mendapatkan total transaksi dari pelanggan yang sedang login
        $totalTransactions = Transaction::where('customer_id', auth()->user()->id)->count();

        // Menghitung nilai SHU berdasarkan jumlah transaksi
        $shuValue = $totalTransactions * 1000; // Misalnya, nilai SHU per transaksi adalah 1000

        // Memformat nilai SHU menjadi format rupiah
        $formattedShu = number_format($shuValue, 0, ',', '.');

        return view('anggota.shu', compact('formattedShu', 'totalTransactions'));
    }
}
