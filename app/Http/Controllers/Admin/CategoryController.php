<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
            $category->image_url = $path;
        }

        $category->is_active = $request->boolean('is_active');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée avec succès.');

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
            $category = Category::findOrFail($id);
            return view('admin.categories.edit', compact('category'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($category->image_url && Storage::disk('public')->exists($category->image_url)) {
                Storage::disk('public')->delete($category->image_url);
            }

            $path = $request->file('image')->store('categories', 'public');
            $category->image_url = $path;
        }

            $category->is_active = $request->boolean('is_active');
            $category->save();

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Supprimer l’image liée
        if ($category->image_url && Storage::disk('public')->exists($category->image_url)) {
            Storage::disk('public')->delete($category->image_url);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée.');

    }
}
