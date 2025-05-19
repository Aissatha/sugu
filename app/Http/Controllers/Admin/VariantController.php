<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('variants')->findOrFail($productId);
        return view('admin.variants.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::findOrFail($productId);
        return view('admin.variants.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'attribute' => 'required|string|max:100',
            'value'     => 'required|string|max:100',
            'stock'     => 'required|integer|min:0',
            'price'     => 'nullable|numeric|min:0',
        ]);

        Variant::create([
            'product_id' => $productId,
            'attribute'  => $request->attribute,
            'value'      => $request->value,
            'stock'      => $request->stock,
            'price'      => $request->price,
        ]);

        return redirect()->route('admin.variants.index', $productId)->with('success', 'Variante ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $variant = Variant::where('product_id', $productId)->findOrFail($id);
        return view('admin.variants.edit', compact('variant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $variant = Variant::where('product_id', $productId)->findOrFail($id);

        $request->validate([
            'attribute' => 'required|string|max:100',
            'value'     => 'required|string|max:100',
            'stock'     => 'required|integer|min:0',
            'price'     => 'nullable|numeric|min:0',
        ]);

        $variant->update($request->all());

        return redirect()->route('admin.variants.index', $productId)->with('success', 'Variante mise à jour.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variant = Variant::where('product_id', $productId)->findOrFail($id);
        $variant->delete();

        return redirect()->route('admin.variants.index', $productId)->with('success', 'Variante supprimée.');

    }
}
