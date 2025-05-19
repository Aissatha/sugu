@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">🔍 Détail du Produit</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="fw-bold mb-3">{{ $product->name }}</h4>

            @if ($product->image_url)
                <div class="mb-3">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid rounded" style="max-height: 300px;">
                </div>
            @endif

            <p><strong>Description :</strong></p>
            <p class="text-muted">{{ $product->description ?: 'Aucune description.' }}</p>

            <p><strong>Prix :</strong> {{ number_format($product->price, 0, ',', ' ') }} FCFA</p>
            <p><strong>Stock :</strong> {{ $product->stock }}</p>
            <p><strong>Statut :</strong>
                <span class="badge bg-{{ $product->status ? 'success' : 'secondary' }}">
                    {{ $product->status ? 'Actif' : 'Inactif' }}
                </span>
            </p>
            <p><strong>Catégorie :</strong> {{ $product->category->name ?? '-' }}</p>
            <p><strong>Vendeur :</strong> {{ $product->vendor->name ?? '-' }} ({{ $product->vendor->email ?? '' }})</p>

            <p><strong>Tags :</strong>
                @forelse ($product->tags as $tag)
                    <span class="badge bg-info text-dark me-1">{{ $tag->name }}</span>
                @empty
                    <span class="text-muted">Aucun tag</span>
                @endforelse
            </p>

            <div class="mt-4">
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">✏️ Modifier</a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">↩️ Retour à la liste</a>
            </div>
        </div>
    </div>
</div>
@endsection
