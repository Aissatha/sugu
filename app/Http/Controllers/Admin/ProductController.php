<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Liste des produits
     */
    public function index()
    {
        $products = Product::with(['vendor', 'category', 'tags'])->latest()->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Formulaire de création
     */
    public function create()
    {
        $categories = Category::all();
        $vendors = User::whereHas('roles', fn($q) => $q->where('name', 'vendor'))->get();
        $tags = Tag::all();

        return view('admin.products.create', compact('categories', 'vendors', 'tags'));
    }

    /**
     * Enregistrement d’un nouveau produit
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image_url'   => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
            'vendor_id'   => 'required|exists:users,id',
            'tags'        => 'nullable|array',
            'tags.*'      => 'exists:tags,id',
        ]);

        $product = Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image_url'   => $request->image_url,
            'status'      => $request->stock > 0,
            'category_id' => $request->category_id,
            'vendor_id'   => $request->vendor_id,
        ]);

        if ($request->filled('tags')) {
            $product->tags()->attach($request->tags);
        }

        return redirect()->route('admin.products.index')->with('success', 'Produit créé avec succès.');
    }

    /**
     * Détail d’un produit
     */
    public function show($id)
    {
        $product = Product::with(['vendor', 'category', 'tags', 'variants'])->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Formulaire de modification
     */
    public function edit($id)
    {
        $product = Product::with('tags')->findOrFail($id);
        $categories = Category::all();
        $vendors = User::whereHas('roles', fn($q) => $q->where('name', 'vendor'))->get();
        $tags = Tag::all();

        return view('admin.products.edit', compact('product', 'categories', 'vendors', 'tags'));
    }

    /**
     * Mise à jour
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image_url'   => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
            'vendor_id'   => 'required|exists:users,id',
        ]);

        $product->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image_url'   => $request->image_url,
            'status'      => $request->stock > 0,
            'category_id' => $request->category_id,
            'vendor_id'   => $request->vendor_id,
        ]);

        $product->tags()->sync($request->tags ?? []);

        return redirect()->route('admin.products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    /**
     * Suppression
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->tags()->detach();
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produit supprimé.');
    }

    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Statut du produit mis à jour.');
    }

}
