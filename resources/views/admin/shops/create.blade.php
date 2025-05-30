@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">➕ Nouvelle Boutique</h1>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreurs lors de la soumission :</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire --}}
    <form action="{{ route('admin.shops.store') }}" method="POST">
        @csrf

        {{-- Nom de la boutique --}}
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la boutique</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}" class="form-control" required>
        </div>

        {{-- Vendeur --}}
        <div class="mb-3">
            <label for="vendor_id" class="form-label">Vendeur associé</label>
            <select name="vendor_id" id="vendor_id" class="form-select" required>
                <option value="">-- Sélectionner un vendeur --</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}" {{ old('vendor_id') == $vendor->id ? 'selected' : '' }}>
                        {{ $vendor->name }} ({{ $vendor->email }})
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Localisation --}}
        <div class="mb-3">
            <label for="adresse" class="form-label">Localisation</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}">
        </div>

        {{-- Téléphone --}}
        <div class="mb-3">
            <label for="phone" class="form-label">Numéro de téléphone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnelle)</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        {{-- Bouton --}}
        <button type="submit" class="btn btn-success">
            <i class="fas fa-check-circle me-1"></i> Créer la boutique
        </button>
    </form>
</div>
@endsection
