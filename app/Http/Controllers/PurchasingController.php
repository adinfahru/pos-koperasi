<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\PurchaseReport;

class PurchasingController extends Controller
{
    public function index()
    {
        $purchaseReports = PurchaseReport::with('product')->get();
        return view('manager.purchasing', compact('purchaseReports'));
    }
}
