@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">🔍 Détails de la boutique</h1>

    {{-- Informations principales --}}
    <div class="bg-white rounded shadow p-6 mb-6">
        <h2 class="text-xl font-bold mb-2">{{ $boutique->nom }}</h2>
        <p class="text-gray-600 mb-2">💬 {{ $boutique->description }}</p>
        <p>👤 Propriétaire : <strong>{{ $boutique->user->name }}</strong> ({{ $boutique->user->email }})</p>
        <p>📅 Créée le : {{ $boutique->created_at->format('d/m/Y') }}</p>
        <p>📊 Statut :
            <span class="inline-block px-2 py-1 rounded text-sm bg-{{ match($boutique->statut) {
                'active' => 'green',
                'en_attente' => 'yellow',
                'désactivée' => 'gray',
                'refusée' => 'red',
                default => 'blue'
            }}-200 text-{{ match($boutique->statut) {
                'active' => 'green',
                'en_attente' => 'yellow',
                'désactivée' => 'gray',
                'refusée' => 'red',
                default => 'blue'
            }}-800">
                {{ ucfirst($boutique->statut) }}
            </span>
        </p>
        <p>💰 Chiffre d'affaires : {{ number_format($boutique->chiffre_affaires, 0, ',', ' ') }} FCFA</p>
        <p>📦 Produits actifs : {{ $boutique->produits->count() }}</p>
    </div>

    {{-- Actions Admin --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        {{-- Désactiver --}}
        <form action="{{ route('admin.boutiques.disable', $boutique->id) }}" method="POST" onsubmit="return confirm('Désactiver cette boutique ?');" class="bg-yellow-100 p-4 rounded shadow">
            @csrf
            <input type="hidden" name="motif" value="Non-respect des règles">
            <button class="w-full bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">🟡 Désactiver</button>
        </form>

        {{-- Réactiver --}}
        <form action="{{ route('admin.boutiques.enable', $boutique->id) }}" method="POST" class="bg-green-100 p-4 rounded shadow">
            @csrf
            <button class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">🟢 Réactiver</button>
        </form>

        {{-- Supprimer --}}
        <form action="{{ route('admin.boutiques.destroy', $boutique->id) }}" method="POST" onsubmit="return confirm('Supprimer définitivement cette boutique ?');" class="bg-red-100 p-4 rounded shadow">
            @csrf
            @method('DELETE')
            <button class="w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">🗑️ Supprimer</button>
        </form>
    </div>

    {{-- Alerte --}}
    <form action="{{ route('admin.boutiques.alert', $boutique->id) }}" method="POST" class="mt-6 bg-blue-100 p-6 rounded shadow">
        @csrf
        <label for="message" class="block font-medium text-blue-800 mb-2">🧨 Envoyer une alerte au vendeur :</label>
        <textarea name="message" id="message" rows="3" class="w-full rounded border border-blue-300 p-2" required placeholder="Motif ou explication..."></textarea>
        <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Envoyer l’alerte</button>
    </form>
</div>
@endsection
