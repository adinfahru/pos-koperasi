<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class PurchasingController extends Controller
{
    public function index()
    {
        $products = Products::with('category:id,category_name')->get();
        return view('manager.purchasing', compact('products'));
    }
}
