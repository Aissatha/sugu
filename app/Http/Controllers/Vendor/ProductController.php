<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::where('vendor_id', Auth::id())->latest()->get();
        $products = Product::where('vendor_id', auth()->id())->latest()->paginate(10); // ✅ pagination
        return view('vendor.products.index', compact('products'));
    }

    public function create()
    {
         $categories = \App\Models\Category::where('is_active', true)->get();
        $subcategories = \App\Models\SubCategory::with('category')->get(); // ✅ important
        $tags = \App\Models\Tag::all();

    return view('vendor.products.create', compact('categories', 'subcategories', 'tags'));
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
            'tags'        => 'nullable|array',
            'tags.*'      => 'exists:tags,id',
        ]);

        $product = Product::create([
            'vendor_id'   => Auth::id(),
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image_url'   => $request->image_url,
            'status'      => $request->stock > 0, // booléen
            'category_id' => $request->category_id,
        ]);

        if ($request->filled('tags')) {
            $product->tags()->attach($request->tags);
        }

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
        $tags = Tag::all();
        return view('vendor.products.edit', compact('product', 'categories', 'tags'));
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
            'status'      => $request->stock > 0, // mise à jour du statut actif/inactif
            'image_url'   => $request->image_url,
            'category_id' => $request->category_id,
        ]);

        $product->tags()->sync($request->tags ?? []);

        return redirect()->route('vendor.products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);
        $product->delete();

        return redirect()->route('vendor.products.index')->with('success', 'Produit supprimé.');
    }

    // Affichage des stocks
    public function stock()
    {

    \Log::info('Stock page reached for user ID: ' . auth()->id());
    $products = Product::where('vendor_id', auth()->id())->get();

    return view('vendor.products.stock', compact('products'));


    }

    // Mise à jour du stock
    public function updateStock(Request $request, $id)
    {
        $product = Product::where('vendor_id', Auth::id())->findOrFail($id);

        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product->stock = $request->stock;
        $product->status = $request->stock > 0;
        $product->save();

        return redirect()->route('vendor.products.stock')->with('success', 'Stock mis à jour.');
    }
}
