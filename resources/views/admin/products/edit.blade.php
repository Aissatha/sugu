@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">✏️ Modifier le Produit</h1>

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

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom du produit *</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $product->name) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Prix (FCFA) *</label>
                <input type="number" name="price" class="form-control" required step="0.01" value="{{ old('price', $product->price) }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Stock *</label>
                <input type="number" name="stock" class="form-control" required value="{{ old('stock', $product->stock) }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Image (URL)</label>
                <input type="url" name="image_url" class="form-control" value="{{ old('image_url', $product->image_url) }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Catégorie *</label>
            <select name="category_id" id="categorySelect" class="form-select" required>
                <option value="">-- Sélectionnez --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected(old('category_id', $product->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Sous-catégorie *</label>
            <select name="subcategory_id" id="subcategorySelect" class="form-select" required>
                <option value="">Chargement...</option> {{-- sera remplacé dynamiquement --}}
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Vendeur *</label>
            <select name="vendor_id" class="form-select" required>
                <option value="">-- Sélectionnez un vendeur --</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}"
                        @selected(old('vendor_id', $product->vendor_id) == $vendor->id)>
                        {{ $vendor->name }} ({{ $vendor->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tags</label>
            <select name="tags[]" class="form-select" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @selected(collect(old('tags', $product->tags->pluck('id')))->contains($tag->id))>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">💾 Mettre à jour</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">↩️ Annuler</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categorySelect = document.getElementById('categorySelect');
        const subcategorySelect = document.getElementById('subcategorySelect');
        const currentSubcategoryId = '{{ old('subcategory_id', $product->subcategory_id) }}';

        function loadSubcategories(categoryId, selectedId = null) {
            if (!categoryId) {
                subcategorySelect.innerHTML = '<option value="">-- Sélectionnez une catégorie d\'abord --</option>';
                return;
            }

            subcategorySelect.innerHTML = '<option value="">Chargement...</option>';

            fetch(`/admin/categories/${categoryId}/subcategories`)
                .then(response => response.json())
                .then(data => {
                    subcategorySelect.innerHTML = '<option value="">-- Sélectionnez --</option>';

                    data.forEach(subcat => {
                        const option = document.createElement('option');
                        option.value = subcat.id;
                        option.textContent = subcat.name;

                        if (subcat.id == selectedId) {
                            option.selected = true;
                        }

                        subcategorySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error(error);
                    subcategorySelect.innerHTML = '<option value="">Erreur de chargement</option>';
                });
        }

        // Initialisation : charger les sous-catégories de la catégorie sélectionnée
        loadSubcategories(categorySelect.value, currentSubcategoryId);

        // Mise à jour dynamique si la catégorie change
        categorySelect.addEventListener('change', function () {
            loadSubcategories(this.value);
        });
    });
</script>
@endsection
