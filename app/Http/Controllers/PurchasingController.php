<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\PurchaseReport;

class PurchasingController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        $purchaseReports = PurchaseReport::with('product');

        if ($year) {
            $purchaseReports->whereYear('purchase_date', $year);
        }

        if ($month) {
            $purchaseReports->whereMonth('purchase_date', $month);
        }

        $purchaseReports = $purchaseReports->get();

        return view('manager.purchasing', compact('purchaseReports', 'year', 'month'));
    }
}
