<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;



class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::with('category')->latest()->paginate(10);
        return view('admin.sub_categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active', true)->get();
    return redirect()->route('admin.sub-categories.index')->with('success', 'Sous-catégorie ajoutée avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:sub_categories,name',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $subCategory = new SubCategory();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->is_active = $request->has('is_active');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sub_categories', 'public');
            $subCategory->image_url = $path;
        }

        $subCategory->save();

        return redirect()->route('sub-categories.index')->with('success', 'Sous-catégorie ajoutée avec succès.');

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
         $subCategory = SubCategory::findOrFail($id); // ✅ on récupère la sous-catégorie
        $categories = Category::where('is_active', true)->get();

    return view('admin.sub_categories.edit', compact('subCategory', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:sub_categories,name,' . $subCategory->id,
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->is_active = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($subCategory->image_url && Storage::disk('public')->exists($subCategory->image_url)) {
                Storage::disk('public')->delete($subCategory->image_url);
            }

            $path = $request->file('image')->store('sub_categories', 'public');
            $subCategory->image_url = $path;
        }

        $subCategory->save();

        return redirect()->route('sub-categories.index')->with('success', 'Sous-catégorie mise à jour.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id); // ✅ on récupère d'abord l'élément

    if ($subCategory->image_url && Storage::disk('public')->exists($subCategory->image_url)) {
        Storage::disk('public')->delete($subCategory->image_url);
    }

    $subCategory->delete();

    return redirect()->route('sub-categories.index')->with('success', 'Sous-catégorie supprimée.');

    }
}
