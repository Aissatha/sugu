@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">➕ Ajouter une Catégorie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image (facultatif)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <input type="hidden" name="is_active" value="0">
        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Activer la catégorie</label>
        </div>

        <button type="submit" class="btn btn-success">✅ Enregistrer</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">↩️ Retour</a>
    </form>
</div>
@endsection
