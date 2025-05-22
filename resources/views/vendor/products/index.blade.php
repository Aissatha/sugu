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
                    <th>Sous-catégorie</th>
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
                    <td>{{ $product->subcategory->name ?? '-' }}</td>
                    <td>{{ number_format($product->price, 0, ',', ' ') }} EURO</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @php
                            $statusColors = [
                                'actif' => 'success',
                                'inactif' => 'danger',
                                'en_attente' => 'secondary',
                            ];
                        @endphp
                        <span class="badge bg-{{ $statusColors[$product->status] ?? 'secondary' }}">
                            {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">✏️</a>

                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce produit ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">🗑️</button>
                        </form>

                        @php
                            $statusLabels = [
                                'actif' => 'Valider',
                                'inactif' => 'Refuser',
                                'en_attente' => 'En attente',
                            ];
                        @endphp

                        @foreach(['actif', 'inactif', 'en_attente'] as $state)
                            <form action="{{ route('admin.products.updateStatus', [$product->id, $state]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-sm btn-{{ $statusColors[$state] }}"
                                        {{ $product->status === $state ? 'disabled' : '' }}>
                                    {{ $statusLabels[$state] }}
                                </button>
                            </form>
                        @endforeach
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">Aucun produit disponible.</td>
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
