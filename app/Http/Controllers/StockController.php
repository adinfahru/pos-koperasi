<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class StockController extends Controller
{
    /**
     * Display products with low stock.
     */
    public function lowStock()
    {
        // Define the threshold for low stock
        $threshold = 10;
        
        // Get products with stock below the threshold
        $lowStockProducts = Products::where('stock', '<', $threshold)->get();
        
        return view('manager.stock', compact('lowStockProducts'));
    }
}