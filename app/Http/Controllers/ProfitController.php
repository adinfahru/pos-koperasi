<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseReport;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class ProfitController extends Controller
{
    // public function index()
    // {
    //     $totalIncome = Transaction::where('status', 'selesai')->sum('total');
    //     $totalPurchases = PurchaseReport::sum('total');
    //     $profit = $totalIncome - $totalPurchases;

    //     return view('manager.profit', compact('totalIncome', 'totalPurchases', 'profit'));
    // }

    public function index(Request $request)
    {
        $year = $request->input('year', date('Y'));

        // Filter data berdasarkan tahun
        $transactions = Transaction::whereYear('created_at', $year)->where('status', 'selesai')->get();
        $totalIncome = $transactions->sum('total');

        $purchases = PurchaseReport::whereYear('purchase_date', $year)->get();
        $totalPurchases = $purchases->sum('total');

        $profit = $totalIncome - $totalPurchases;

        // Mengambil data bulan
        $data = $this->getMonthlyData($year);

        return view('manager.profit', compact('totalIncome', 'totalPurchases', 'profit', 'data', 'year'));
    }

    private function getMonthlyData($year)
    {
        $months = [];
        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $transactions = Transaction::whereYear('created_at', $year)->whereMonth('created_at', $i)->get();
            $totalIncome = $transactions->sum('total');

            $purchases = PurchaseReport::whereYear('purchase_date', $year)->whereMonth('purchase_date', $i)->get();
            $totalPurchases = $purchases->sum('total');

            $profit = $totalIncome - $totalPurchases;

            $months[$month] = [
                'income' => $totalIncome,
                'expense' => $totalPurchases,
                'profit' => $profit
            ];
        }
        return $months;
    }
}
