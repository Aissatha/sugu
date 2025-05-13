@extends('layouts.vendor')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-semibold mb-6">Commandes reçues</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Formulaire de filtrage --}}
    <form method="GET" action="{{ route('vendor.orders.index') }}" class="mb-6">
        <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Filtrer par statut :</label>
        <select name="status" id="status" class="border border-gray-300 p-2 rounded w-64 inline-block mr-2">
            <option value="">-- Tous --</option>
            <option value="en_attente" {{ request('status') === 'en_attente' ? 'selected' : '' }}>En attente</option>
            <option value="validée" {{ request('status') === 'validée' ? 'selected' : '' }}>Validée</option>
            <option value="expédiée" {{ request('status') === 'expédiée' ? 'selected' : '' }}>Expédiée</option>
            <option value="livrée" {{ request('status') === 'livrée' ? 'selected' : '' }}>Livrée</option>
            <option value="annulée" {{ request('status') === 'annulée' ? 'selected' : '' }}>Annulée</option>
        </select>
        <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">
            Filtrer
        </button>
    </form>

    @if($orders->isEmpty())
        <p>Aucune commande pour le moment.</p>
    @else
        <table class="min-w-full bg-white border border-gray-200 rounded shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 border-b">#</th>
                    <th class="py-3 px-4 border-b">Client</th>
                    <th class="py-3 px-4 border-b">Montant</th>
                    <th class="py-3 px-4 border-b">Statut</th>
                    <th class="py-3 px-4 border-b">Date</th>
                    <th class="py-3 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $order->id }}</td>
                    <td class="py-3 px-4">{{ $order->client->name ?? 'Client supprimé' }}</td>
                    <td class="py-3 px-4">{{ number_format($order->total_price, 0, ',', ' ') }} FCFA</td>
                    <td class="py-3 px-4 capitalize">
                        <span class="inline-block px-2 py-1 text-sm rounded bg-gray-200">{{ $order->status }}</span>
                    </td>
                    <td class="py-3 px-4">{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ route('vendor.orders.show', $order->id) }}"
                           class="text-blue-600 hover:underline">Voir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
