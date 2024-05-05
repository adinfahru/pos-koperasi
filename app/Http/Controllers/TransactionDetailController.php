<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Models\Products;

class TransactionDetailController extends Controller
{
    function index()
    {
        $transactions = Transaction::with('customer')->get();
        return view('transaction.index', compact('transactions'));
    }
    public function create(Request $request)
    {
        $product_id = $request->product_id;
        $transaction_id = $request->transaction_id;
        $qty = $request->qty;

        // Find the product
        $product = Products::findOrFail($product_id);

        // Check if quantity is zero
        if ($qty == 0) {
            return redirect()->back()->with('error', 'Quantity cannot be zero.');
        }

        // Check if requested quantity exceeds stock
        if ($product->stock < $qty) {
            return redirect()->back()->with('error', 'Insufficient stock for this product.');
        }

        // Check if the product is already added to the transaction
        $existingDetail = TransactionDetail::where('product_id', $product_id)
            ->where('transaction_id', $transaction_id)
            ->first();

        // Calculate subtotal
        $subtotal = $qty * $product->price;

        if ($existingDetail) {
            // If product already exists in the transaction, update quantity and subtotal
            $existingDetail->qty += $qty;
            $existingDetail->subtotal += $subtotal;
            $existingDetail->save();
        } else {
            // If product doesn't exist in the transaction, create a new transaction detail
            $data = [
                'product_id' => $product_id,
                'product_name' => $product->name,
                'transaction_id' => $transaction_id,
                'subtotal' => $subtotal,
                'qty' => $qty,
            ];
            TransactionDetail::create($data);
        }

        // Deduct the sold quantity from the product's stock
        $product->stock -= $qty;
        $product->save();

        // Update the total of the transaction
        $transaction = Transaction::find($transaction_id);
        $transaction->total += $subtotal;
        $transaction->save();

        return redirect()->back()->with('success', 'Product added to transaction successfully.');
    }



    public function delete()
    {
        $id = request('id');
        $td = TransactionDetail::find($id);

        // Find the product related to the transaction detail
        $product = Products::find($td->product_id);

        // Restore the stock
        $product->stock += $td->qty;
        $product->save();

        // Find the transaction related to the transaction detail
        $transaction = Transaction::find($td->transaction_id);

        // Update the total of the transaction
        $transaction->total -= $td->subtotal;
        $transaction->save();

        // Delete the transaction detail
        $td->delete();

        return redirect()->back()->with('success', 'Transaction detail deleted successfully.');
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
    public function store(Request $request, $productId)
    {
        $validatedData = $request->validate([
            'transaction_id' => 'required',
            'product_name' => 'required',
            'qty' => 'required|numeric|min:1',
            'subtotal' => 'required|numeric',
        ]);

        $validatedData['product_id'] = $productId;

        TransactionDetail::create($validatedData);

        return redirect()->route('transaction.index');
    }
}
