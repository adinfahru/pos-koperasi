<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfitController extends Controller
{
    public function index()
    {
        return view('manager.profit');
    }
}
