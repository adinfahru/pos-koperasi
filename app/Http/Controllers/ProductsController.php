<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Products::all();
        return view('products.index', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = Products::create($request->all());
        if ($request->hasFile('image')){
            $request->file('image')->move('fotoProduk/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('products.index')->with('success', 'Product created successfully');
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
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::findOrFail($id);

        $product->name = $request->name;
        $product->category = $request->category;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->purchase = $request->purchase;

        // Check if a new image file has been uploaded (Kevin)
        if ($request->hasFile('image')) {
            // Move the new image file to the desired directory
            $request->file('image')->move('fotoProduk/', $request->file('image')->getClientOriginalName());
            // Update the image attribute of the existing product with the new file name
            $product->image = $request->file('image')->getClientOriginalName();
        }
        // Save the changes to the product
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Products::findOrFail($id);
        $product ->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
        
    }
}
