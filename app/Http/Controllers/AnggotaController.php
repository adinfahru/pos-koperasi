<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PurchaseReport;
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

        // Get the latest five transactions
        $latestTransactions = Transaction::where('customer_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Pass the leaderboard data, the position of the logged-in customer, and the latest transactions to the view
        return view('anggota.dashboard', compact('leaderboard', 'loggedInCustomerPosition', 'latestTransactions'));
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

        // $totalTransactions = Transaction::where('customer_id', auth()->user()->id)->count();
        // $shuValue = $totalTransactions * 1000;
        // $formattedShu = number_format($shuValue, 0, ',', '.');
        // return view('anggota.shu', compact('formattedShu', 'totalTransactions'));

        // Get the current logged-in user's ID
        $customerId = auth()->user()->id;

        // Calculate total points for the current customer (number of transactions)
        $totalCustomerPoints = Transaction::where('customer_id', $customerId)
            ->where('status', 'selesai')
            ->count();

        // Calculate total points for all customers (number of transactions)
        $totalAllPoints = Transaction::where('status', 'selesai')->count();

        // Calculate total income from koperasi (sum of all completed transactions)
        $totalIncome = Transaction::where('status', 'selesai')->sum('total');

        // Calculate total purchases (sum of total from purchase_reports)
        $totalPurchases = PurchaseReport::sum('total');

        // Calculate net income by subtracting total purchases from total income
        $netIncome = $totalIncome - $totalPurchases;

        // Prevent division by zero if there are no transactions
        if ($totalAllPoints == 0) {
            $shuValue = 0;
        } else {
            // Calculate SHU value using the formula
            $shuValue = ($totalCustomerPoints / $totalAllPoints) * $netIncome;
        }

        // Format SHU value for display
        $formattedShu = number_format($shuValue, 0, ',', '.');

        return view('anggota.shu', compact('formattedShu', 'totalCustomerPoints'));
    }
}
