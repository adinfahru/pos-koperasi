<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SalesController extends Controller
{
    public function index()
    {   
        $products = Products::all();
        return view('sales.index', ['products' => $products]);

    }
}
