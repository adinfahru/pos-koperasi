<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;

class TransactionDetailController extends Controller
{
    function create(Request $request)
    {
        $product_id = $request->product_id;
        $transaction_id = $request->transaction_id;
        $td = TransactionDetail::whereProductId($product_id)->whereTransactionId($transaction_id)->first();

        if ($td == null) {
            $data = [
                'product_id' => $product_id,
                'product_name' => $request->product_name,
                'transaction_id' => $transaction_id,
                'subtotal' => $request->subtotal,
                'qty' => $request->qty,
            ];
            TransactionDetail::create($data);
        } else {
            $data = [
                'qty' => $td->qty + $request->qty,
                'subtotal' => $request->subtotal + $td->subtotal,
            ];
            $td->update($data);
        }

        return redirect('transaction/'.$transaction_id. '/edit');
    }
}
