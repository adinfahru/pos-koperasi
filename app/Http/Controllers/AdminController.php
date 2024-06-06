<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Transaction;
use App\Models\PurchaseReport;

class AdminController extends Controller
{
    public function index()
    {   
        
        $products = Products::all();
        $users = User::all();
        $transactions = Transaction::all();
        $totalSales = Transaction::sum('total');
        $totalCategory = Category::count('id');
        return view('admin.index', compact('products','users','transactions','totalSales','totalCategory'));
        

    }
    public function sales_report(Request $request)
    {
        $year = $request->input('year', date('Y'));

        // Filter data berdasarkan tahun
        $transactions = Transaction::whereYear('created_at', $year)->where('status', 'selesai')->get();
        $totalIncome = $transactions->sum('total');

        $purchases = PurchaseReport::whereYear('purchase_date', $year)->get();
        $totalPurchases = $purchases->sum('total');

        $profit = $totalIncome - $totalPurchases;


        return view('manager.profit', compact('totalIncome', 'totalPurchases', 'profit', 'data', 'year'));
    }
    public function Top_Leaderboard()
    {
        // Group transactions by customer_id and count the number of transactions for each customer
        $leaderboard = Transaction::select('customer_id')
            ->selectRaw('count(*) as transaction_count')
            ->groupBy('customer_id')
            ->orderByDesc('transaction_count')
            ->limit(5)
            ->get();

        // Optionally, you can load the customer details if needed
        $leaderboard->load('customer');

        return $leaderboard;
    }
    public function latest_transaction()
{
    $latestTransactions = Transaction::select('transactions')
        ->orderBy('created_at', 'desc')
        ->limit(5)
        ->get();

    return view('admin.latest_transactions', compact('latestTransactions'));
}
}
