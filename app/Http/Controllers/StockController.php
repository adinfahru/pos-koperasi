<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class StockController extends Controller
{
    /**
     * Display products with low stock.
     */
    public function lowStock()
    {
        
        $threshold = 10;
        $minumanCategory = Category::where('category_name', 'Minuman')->first();


        if ($minumanCategory) {
            $lowStockProducts = Products::with('category')
                                        ->where('category_id', $minumanCategory->id)
                                        ->where('stock', '<', $threshold)
                                        ->get();
        } else {
            $lowStockProducts = collect();
        }

        return view('manager.stock', compact('lowStockProducts'));
    }

}