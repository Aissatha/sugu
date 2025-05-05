@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">➕ Créer une nouvelle boutique</h1>

    <form action="{{ route('shops.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-medium">Nom</label>
            <input name="nom" class="w-full border rounded px-3 py-2" value="{{ old('nom') }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Vendeur</label>
            <select name="vendor_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Choisir un vendeur --</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}">{{ $vendor->nom }} ({{ $vendor->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Localisation</label>
            <input name="localisation" class="w-full border rounded px-3 py-2" value="{{ old('localisation') }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Statut</label>
            <select name="statut" class="w-full border rounded px-3 py-2">
                <option value="actif">Actif</option>
                <option value="suspendu">Suspendu</option>
                <option value="fermé">Fermé</option>
            </select>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Créer</button>
    </form>
</div>
@endsection
