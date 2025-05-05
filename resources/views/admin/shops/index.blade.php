@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">📦 Liste des boutiques</h1>

    <a href="{{ route('shops.create') }}" class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        ➕ Créer une boutique
    </a>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif

    <table class="min-w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left py-2 px-4">Nom</th>
                <th class="text-left py-2 px-4">Vendeur</th>
                <th class="text-left py-2 px-4">Statut</th>
                <th class="text-left py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $shop->nom }}</td>
                    <td class="py-2 px-4">{{ $shop->vendor->nom }}</td>
                    <td class="py-2 px-4 capitalize">{{ $shop->statut }}</td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('shops.show', $shop) }}" class="text-blue-600 hover:underline">Voir</a>
                        <a href="{{ route('shops.edit', $shop) }}" class="text-yellow-600 hover:underline">Modifier</a>
                        <form action="{{ route('shops.destroy', $shop) }}" method="POST" onsubmit="return confirm('Supprimer cette boutique ?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $shops->links() }}
    </div>
</div>
@endsection
