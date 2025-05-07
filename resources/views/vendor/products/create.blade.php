@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Ajouter un nouveau produit</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreurs :</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vendor.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Chemise en coton" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description complète..."></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prix (FCFA)</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Ex: 10000" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Quantité en stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ex: 50" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Sélectionner une catégorie --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image principale</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('vendor.products.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
