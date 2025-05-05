@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">🏪 Détails de la boutique</h1>

    <div class="bg-white shadow rounded p-6 space-y-4">
        <div><strong>Nom :</strong> {{ $shop->nom }}</div>
        <div><strong>Slug :</strong> {{ $shop->slug }}</div>
        <div><strong>Description :</strong> {{ $shop->description }}</div>
        <div><strong>Localisation :</strong> {{ $shop->localisation }}</div>
        <div><strong>Statut :</strong> {{ ucfirst($shop->statut) }}</div>
        <div><strong>Vendeur :</strong> {{ $shop->vendor->nom }} ({{ $shop->vendor->email }})</div>
        <div><strong>Date de création :</strong> {{ $shop->created_at->format('d/m/Y') }}</div>
    </div>

    <div class="mt-6">
        <a href="{{ route('shops.edit', $shop) }}" class="text-blue-600 hover:underline">✏️ Modifier</a> |
        <a href="{{ route('shops.index') }}" class="text-gray-600 hover:underline">⬅️ Retour</a>
    </div>
</div>
@endsection
