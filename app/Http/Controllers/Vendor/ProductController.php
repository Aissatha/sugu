<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('vendor_id', Auth::id())->latest()->get();
        return view('vendor.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('vendor.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image_url'   => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create([
            'vendor_id'   => Auth::id(),
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image_url'   => $request->image_url,
            'status'      => 'actif',
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('vendor.products.index')->with('success', 'Produit ajouté avec succès.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);
        $categories = Category::all();
        return view('vendor.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image_url'   => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image_url'   => $request->image_url,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('vendor.products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);
        $product->delete();

        return redirect()->route('vendor.products.index')->with('success', 'Produit supprimé.');
    }

    public function stock()
    {
        $products = Product::where('vendor_id', Auth::id())->get();
        return view('vendor.products.stock', compact('products'));
    }

    public function updateStock(Request $request, $id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);

        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product->stock = $request->stock;
        $product->save();

        return redirect()->route('vendor.products.stock')->with('success', 'Stock mis à jour.');
    }
}
