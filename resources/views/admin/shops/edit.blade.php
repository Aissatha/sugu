@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">✏️ Modifier la boutique</h1>

    <form action="{{ route('admin.shops.update', $shop) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Nom</label>
            <input name="nom" class="w-full border rounded px-3 py-2" value="{{ old('nom', $shop->nom) }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Vendeur</label>
            <select name="vendor_id" class="w-full border rounded px-3 py-2" required>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}" {{ $shop->vendor_id == $vendor->id ? 'selected' : '' }}>
                        {{ $vendor->nom }} ({{ $vendor->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $shop->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Localisation</label>
            <input name="localisation" class="w-full border rounded px-3 py-2" value="{{ old('localisation', $shop->localisation) }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Statut</label>
            <select name="statut" class="w-full border rounded px-3 py-2">
                <option value="actif" {{ $shop->statut === 'actif' ? 'selected' : '' }}>Actif</option>
                <option value="suspendu" {{ $shop->statut === 'suspendu' ? 'selected' : '' }}>Suspendu</option>
                <option value="fermé" {{ $shop->statut === 'fermé' ? 'selected' : '' }}>Fermé</option>
            </select>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Mettre à jour</button>
    </form>
</div>
@endsection
