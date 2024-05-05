<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\User;

class TransactionDetailController extends Controller
{   
    function index()
    {
        $transactions = Transaction::with('customer')->get();
        return view('transaction.index', compact('transactions'));
    }
    function create(Request $request)
    {
        $product_id = $request->product_id;
        $transaction_id = $request->transaction_id;
        $td = TransactionDetail::whereProductId($product_id)->whereTransactionId($transaction_id)->first();
        $transaction = Transaction::find($transaction_id);
        $user_id = $request->user_id;
        $customer_name = $request->input('customer');

        if ($td == null) {
            $data = [
                'product_id' => $product_id,
                'product_name' => $request->product_name,
                'transaction_id' => $transaction_id,
                'subtotal' => $request->subtotal,
                'qty' => $request->qty,
            ];
            TransactionDetail::create($data);

            $transaction->total += $request->subtotal;
            //$transaction->customer()->associate(User::find($request->input('customer')));
            $transaction->save();

        } else {
            $data = [
                'qty' => $td->qty + $request->qty,
                'subtotal' => $request->subtotal + $td->subtotal,
            ];
            $td->update($data);

            $dt = [
                'total' => $request->subtotal + $transaction->total,
            ];
            $transaction->update($dt);
        }

        return redirect('transaction/'.$transaction_id. '/edit');
    }

    function delete()
    {
        $id = request('id');
        $td = TransactionDetail::find($id);
        
        $transaction = Transaction::find($td->transaction_id);
        $data = [
            'total' => $transaction->total - $td->subtotal,
        ];
        $transaction->update($data);

        $td->delete();

        return redirect()->back();
    }

    function done($id)
    {
        
        $transaction = Transaction::find($id);
    $data = [
        'status' => 'selesai',
        'customer_id' => request('customer'), // update customer_id field
    ];
    $transaction->update($data);
    return redirect('transaction');

        
    }
}
