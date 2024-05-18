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
        return view('admin.index', ['products' => $products, 'users' => $users, 'transactions' => $transactions]);
        
    }

     
}
