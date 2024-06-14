<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'))->with('success', 'Product created successfully!');
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product updated successfully!');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted succesfully!');
    }
}