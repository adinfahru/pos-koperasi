<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function index()
    {   
        
        $products = Products::all();
        $users = User::all();
        $transactions = Transaction::all();
        $totalSales = Transaction::sum('total');
        return view('admin.index', compact('products','users','transactions','totalSales'));
        
    }

     
}
