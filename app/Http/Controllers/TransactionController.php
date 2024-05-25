<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Products;
use App\Models\User;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $transaction_detail = TransactionDetail::get();
        $transactions = Transaction::with('customer')->orderBy('created_at', 'desc')->paginate(10);
        return view('transaction.index', compact('transactions', 'transaction_detail'));
    }

    public function filter(Request $request)
    {
        // Retrieve start and end dates from the request
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        // Increment the end date by one day to include transactions on the end date
        $end_date = date('Y-m-d', strtotime($end_date . ' + 1 day'));

        // Query transactions based on the filter criteria
        $transactions = Transaction::with('customer')
            ->whereBetween('created_at', [$start_date, $end_date])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Pass the filtered transactions to the view
        return view('transaction.index', compact('transactions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingTransaction = Transaction::where('cashier_id', auth()->user()->id)->where('status', '!=', 'selesai')->first();

        // Jika sudah ada, arahkan pengguna ke halaman edit transaksi yang sudah ada
        if ($existingTransaction) {
            return redirect('transaction/' . $existingTransaction->id . '/edit');
        }

        $data = [
            'cashier_id' => auth()->user()->id,
            'total' => 0,
        ];

        $transaction = Transaction::create($data);

        return redirect('transaction/' . $transaction->id . '/edit');
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
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction_detail = TransactionDetail::where('transaction_id', $id)->get();
        return view('transaction.show', compact('transaction', 'transaction_detail'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Products::get();
        $transaction_detail = TransactionDetail::whereTransactionId($id)->get();
        $users = User::get();
        $user_id = request('user_id');

        $product_id = request('product_id');
        $p_detail = Products::find($product_id);

        $act = request('act'); // Provide a default value if 'act' is not present in the request
        $qty = request('qty');

        if ($act == 'min') {
            if ($qty <= 1) {
                $qty = 1;
            } else {
                $qty = $qty - 1;
            }
            $qty = $qty - 1;
        } else {
            $qty = $qty + 1;
        }

        // Check if $p_detail is not null before accessing its properties
        $subtotal = $p_detail ? $qty * $p_detail->price : 0;

        $transaction = Transaction::find($id);

        $dibayarkan = request('dibayarkan');
        $kembalian = $dibayarkan - $transaction->total;

        return view('transaction.create', compact('user_id', 'users', 'kembalian', 'transaction', 'transaction_detail', 'products', 'p_detail', 'qty', 'subtotal', 'users'));
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
