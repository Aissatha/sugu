@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-4 fw-bold">🛒 Gestion des Produits</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">
        ➕ Ajouter un Produit
    </a>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Vendeur</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->vendor->name ?? 'N/A' }}</td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>{{ number_format($product->price, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @php
                            $statusColors = [
                                'actif' => 'success',
                                'inactif' => 'danger',
                                'en_attente' => 'secondary'
                            ];
                        @endphp
                        <span class="badge bg-{{ $statusColors[$product->status] ?? 'secondary' }}">
                            {{ ucfirst($product->status) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">✏️</a>

                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce produit ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">🗑️</button>
                        </form>

                        {{-- Boutons de mise à jour du statut --}}
                        <form action="{{ route('admin.products.updateStatus', [$product->id, 'actif']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-success">Valider</button>
                        </form>

                        <form action="{{ route('admin.products.updateStatus', [$product->id, 'inactif']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-danger">Refuser</button>
                        </form>

                        <form action="{{ route('admin.products.updateStatus', [$product->id, 'en_attente']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-secondary">En attente</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">Aucun produit disponible.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $products->links() }}
    </div>
</div>
@endsection
