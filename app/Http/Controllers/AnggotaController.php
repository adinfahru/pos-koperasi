<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota.dashboard');
    }

    public function history()
    {
        return view('anggota.history');
    }

    public function shu()
    {
        return view('anggota.shu');
    }

}
