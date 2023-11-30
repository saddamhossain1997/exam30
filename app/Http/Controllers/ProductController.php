<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.add_product');
    }

    // =========product store method ===================

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('list')->with('success', 'Product Successfully insert');
    }


    // =========product list method ===================
    public function list()
    {
        $product_lists = Product::all();
        return view('product.list_product', compact('product_lists'));
    }



    // =========product edit method ===================

    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }



    // =========product update method ===================

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $product = Product::find($id);

        if ($product) {
            $product->update($request->all());
            return redirect()->route('list')->with('success', 'Product updated successfully.');
        }

        return redirect()->route('list')->with('error', 'Product not found.');
    }


    // =========product delete method ===================

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('list')->with('success', 'Product deleted successfully.');
        }

        return redirect()->route('users.index')->with('error', 'Product not found.');
    }
}
