@extends('layouts.app') {{-- ou admin.layout si tu en as un --}}

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">📋 Liste des Boutiques</h1>

    {{-- Flash messages --}}
    @foreach (['success', 'error', 'warning', 'info'] as $msg)
        @if(session($msg))
            <div class="mb-4 p-4 rounded bg-{{ $msg === 'success' ? 'green' : ($msg === 'error' ? 'red' : ($msg === 'warning' ? 'yellow' : 'blue')) }}-100 text-{{ $msg === 'success' ? 'green' : ($msg === 'error' ? 'red' : ($msg === 'warning' ? 'yellow' : 'blue')) }}-800">
                {{ session($msg) }}
            </div>
        @endif
    @endforeach

    {{-- Tableau --}}
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100 text-left text-sm font-semibold">
                    <th class="p-4">Nom</th>
                    <th class="p-4">Propriétaire</th>
                    <th class="p-4">Statut</th>
                    <th class="p-4">Chiffre d’affaires</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($boutiques as $boutique)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">{{ $boutique->nom }}</td>
                        <td class="p-4">{{ $boutique->user->name ?? 'Non défini' }}</td>
                        <td class="p-4">
                            <span class="px-2 py-1 rounded text-sm bg-{{ match($boutique->statut) {
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
                        </td>
                        <td class="p-4">{{ number_format($boutique->chiffre_affaires, 2, ',', ' ') }} FCFA</td>
                        <td class="p-4 space-x-2">
                            <a href="{{ route('admin.boutiques.show', $boutique->id) }}" class="text-blue-600 hover:underline">Détails</a>
                            {{-- Bouton d’action rapide (désactiver/activer) --}}
                            @if($boutique->statut === 'active')
                                <form action="{{ route('admin.boutiques.disable', $boutique->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Désactiver cette boutique ?');">
                                    @csrf
                                    <input type="hidden" name="motif" value="Désactivation manuelle">
                                    <button type="submit" class="text-yellow-600 hover:underline">Désactiver</button>
                                </form>
                            @elseif($boutique->statut === 'désactivée')
                                <form action="{{ route('admin.boutiques.enable', $boutique->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="text-green-600 hover:underline">Activer</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-500">Aucune boutique trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $boutiques->links() }}
    </div>
</div>
@endsection
