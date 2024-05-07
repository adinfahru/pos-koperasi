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

    public function transactionHistory($userId)
    {
        // Dapatkan data anggota berdasarkan ID
        $user = User::findOrFail($userId);

        // Ambil data transaksi yang terkait dengan anggota tersebut
        $transactions = $user->transactions()->with('transactionDetails')->orderBy('created_at', 'desc')->get();

        // Tampilkan view dengan data transaksi
        return view('anggota.history', compact('user', 'transactions'));
    }
}
