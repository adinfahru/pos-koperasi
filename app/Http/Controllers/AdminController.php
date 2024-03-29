<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {   
        
        $products = Products::all();
        $users = User::all();
        return view('admin.index', ['products' => $products, 'users' => $users]);
        
    }
}
