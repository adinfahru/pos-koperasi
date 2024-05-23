<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {
        return view ('rekap.index');
    }
}
