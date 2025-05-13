@extends('layouts.vendor')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-semibold mb-6">Détail de la commande #{{ $order->id }}</h2>

    <div class="mb-4">
        <strong>Client :</strong> {{ $order->client->name ?? 'Client supprimé' }}<br>
        <strong>Date :</strong> {{ $order->created_at->format('d/m/Y H:i') }}<br>
        <strong>Montant total :</strong> {{ number_format($order->total_price, 0, ',', ' ') }} FCFA<br>
        <strong>Statut :</strong> <span class="text-blue-600 font-semibold capitalize">{{ $order->status }}</span><br>

        {{-- ✅ Lien de téléchargement de la facture --}}
        <a href="{{ route('vendor.orders.invoice', $order->id) }}"
           class="inline-block mt-2 text-indigo-600 hover:underline">📥 Télécharger la facture PDF</a>

        {{-- ✅ Lien de contact du client --}}
        @if($order->client)
            <a href="{{ route('vendor.chat.withClient', $order->client->id) }}"
               class="inline-block mt-2 ml-4 text-blue-600 hover:underline">💬 Contacter le client</a>
        @endif
    </div>

    <h3 class="text-lg font-bold mt-6 mb-2">Produits commandés</h3>
    <ul class="list-disc pl-5 text-gray-700 mb-4">
        @foreach ($order->items as $item)
            <li>
                {{ $item['name'] ?? 'Produit inconnu' }} -
                {{ $item['quantity'] ?? 1 }} x {{ number_format($item['price'], 0, ',', ' ') }} FCFA
            </li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('vendor.orders.updateStatus', $order->id) }}">
        @csrf
        <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Mettre à jour le statut :</label>
        <select name="status" id="status" class="border border-gray-300 p-2 rounded mb-4">
            <option value="en_attente" {{ $order->status === 'en_attente' ? 'selected' : '' }}>En attente</option>
            <option value="validée" {{ $order->status === 'validée' ? 'selected' : '' }}>Validée</option>
            <option value="expédiée" {{ $order->status === 'expédiée' ? 'selected' : '' }}>Expédiée</option>
            <option value="livrée" {{ $order->status === 'livrée' ? 'selected' : '' }}>Livrée</option>
            <option value="annulée" {{ $order->status === 'annulée' ? 'selected' : '' }}>Annulée</option>
        </select>

        <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">
            Enregistrer
        </button>
    </form>

    <a href="{{ route('vendor.orders.index') }}" class="inline-block mt-4 text-blue-600 hover:underline">← Retour à la liste</a>
</div>
@endsection
