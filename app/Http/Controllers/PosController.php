<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        $users = User::all();
        return view('pos.index', ['products' => $products, 'users' => $users]);

    }

    public function addToCart(Request $request, $productId) {
        // Ambil detail produk
        $product = Products::findOrFail($productId);

        // Logika untuk menambahkan produk ke keranjang (misalnya, session, database, dll.)
        // Untuk contoh, mari kita simpan dalam session
        $cart = $request->session()->get('cart', []);
        $cart[] = $product;
        $request->session()->put('cart', $cart);

        // Redirect kembali ke halaman pos atau sesuaikan sesuai kebutuhan
        return redirect()->route('pos.index');  
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
