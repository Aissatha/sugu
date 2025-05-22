<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['vendor', 'category', 'subcategory', 'tags'])->latest()->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::with('category')->get();
        $vendors = User::whereHas('roles', fn($q) => $q->where('name', 'vendor'))->get();
        $tags = Tag::all();

        return view('admin.products.create', compact('categories', 'subcategories', 'vendors', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'description'     => 'nullable|string',
            'price'           => 'required|numeric|min:0',
            'stock'           => 'required|integer|min:0',
            'image_url'       => 'nullable|url',
            'category_id'     => 'required|exists:categories,id',
            'subcategory_id'  => 'required|exists:sub_categories,id',
            'vendor_id'       => 'required|exists:users,id',
            'tags'            => 'nullable|array',
            'tags.*'          => 'exists:tags,id',
        ]);

        $product = Product::create([
            'name'            => $request->name,
            'description'     => $request->description,
            'price'           => $request->price,
            'stock'           => $request->stock,
            'image_url'       => $request->image_url,
            'status'          => 'en_attente',
            'category_id'     => $request->category_id,
            'subcategory_id'  => $request->subcategory_id,
            'vendor_id'       => $request->vendor_id,
        ]);

        if ($request->filled('tags')) {
            $product->tags()->attach($request->tags);
        }

        return redirect()->route('admin.products.index')->with('success', 'Produit créé avec succès.');
    }

    public function show($id)
    {
        $product = Product::with(['vendor', 'category', 'subcategory', 'tags', 'variants'])->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with('tags')->findOrFail($id);
        $categories = Category::all();
        $subcategories = SubCategory::with('category')->get();
        $vendors = User::whereHas('roles', fn($q) => $q->where('name', 'vendor'))->get();
        $tags = Tag::all();

        return view('admin.products.edit', compact('product', 'categories', 'subcategories', 'vendors', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'            => 'required|string|max:255',
            'description'     => 'nullable|string',
            'price'           => 'required|numeric|min:0',
            'stock'           => 'required|integer|min:0',
            'image_url'       => 'nullable|url',
            'category_id'     => 'required|exists:categories,id',
            'subcategory_id'  => 'required|exists:sub_categories,id',
            'vendor_id'       => 'required|exists:users,id',
            'tags'            => 'nullable|array',
            'tags.*'          => 'exists:tags,id',
        ]);

        $product->update([
            'name'            => $request->name,
            'description'     => $request->description,
            'price'           => $request->price,
            'stock'           => $request->stock,
            'image_url'       => $request->image_url,
            'category_id'     => $request->category_id,
            'subcategory_id'  => $request->subcategory_id,
            'vendor_id'       => $request->vendor_id,
        ]);

        $product->tags()->sync($request->tags ?? []);

        return redirect()->route('admin.products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->tags()->detach();
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produit supprimé.');
    }

    public function toggleStatus(Product $product)
    {
        $product->status = $product->status === 'actif' ? 'inactif' : 'actif';
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Statut du produit mis à jour.');
    }

    public function updateStatus(Product $product, string $status)
    {
        $allowedStatuses = ['actif', 'inactif', 'en_attente'];

        if (!in_array($status, $allowedStatuses)) {
            return redirect()->route('admin.products.index')->with('error', "Le statut \"$status\" n'est pas autorisé.");
        }

        if ($product->status === $status) {
            return redirect()->route('admin.products.index')->with('info', "Le produit est déjà marqué comme \"$status\".");
        }

        $product->update(['status' => $status]);

        return redirect()->route('admin.products.index')->with('success', "Le statut du produit a été mis à jour en \"$status\".");
    }
    public function getSubcategories($categoryId)
    {
        $subcategories = \App\Models\SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subcategories);
    }

}
