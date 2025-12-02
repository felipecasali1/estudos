<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('products.create', compact(['categories', 'users']));
    }

    public function store(ProductRequest $request)
    {
        Product::create(array_merge($request->validated(), ['user_id' => auth()->id()]));
        return redirect()->route('products.index')->with('success', 'Product registered successfully!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $users = User::all();
        return view('products.edit', compact(['product', 'categories', 'users']));
    }

    public function update(ProductRequest $request, Product $product)
    {

        $product->update($request->validated(), ['user_id' => auth()->id()]);
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
