@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">✏️ Modifier la Sous-catégorie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sub-categories.update', $subCategory) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom de la sous-catégorie</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $subCategory->name) }}">
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie associée</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Choisir une catégorie --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $subCategory->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Changer l'image</label>
            @if($subCategory->image_url)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $subCategory->image_url) }}" width="100">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- ✅ Champ caché obligatoire -->
        <input type="hidden" name="is_active" value="0">

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $subCategory->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Activer la sous-catégorie</label>
        </div>

        <button type="submit" class="btn btn-success">💾 Mettre à jour</button>
        <a href="{{ route('admin.sub-categories.index') }}" class="btn btn-secondary">↩️ Retour</a>
    </form>
</div>
@endsection
