@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">➕ Ajouter un Produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreurs détectées :</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom du produit *</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Prix (FCFA) *</label>
                <input type="number" name="price" class="form-control" required step="0.01" value="{{ old('price') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Stock *</label>
                <input type="number" name="stock" class="form-control" required value="{{ old('stock') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Image (URL)</label>
                <input type="url" name="image_url" class="form-control" value="{{ old('image_url') }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Catégorie *</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Sélectionnez --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Vendeur *</label>
            <select name="vendor_id" class="form-select" required>
                <option value="">-- Sélectionnez un vendeur --</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}" @selected(old('vendor_id') == $vendor->id)>
                        {{ $vendor->name }} ({{ $vendor->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tags</label>
            <select name="tags[]" class="form-select" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" @selected(collect(old('tags'))->contains($tag->id))>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- ✅ Encart d'information sur les variantes --}}
        <div class="alert alert-info mt-4">
            <strong>ℹ️ Astuce :</strong> Une fois le produit enregistré, vous pourrez gérer les <strong>variantes</strong> (tailles, couleurs, etc.) depuis la page de détails.
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">✅ Enregistrer</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">↩️ Retour</a>
        </div>
    </form>
</div>
@endsection
