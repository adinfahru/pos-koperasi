<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShuController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('anggota.shu', ['users' => $users]);

        
    }
}
