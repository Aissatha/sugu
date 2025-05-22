@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Ma boutique</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($shop)
        <div class="card shadow-sm p-3">
            <h5 class="text-primary">{{ $shop->nom }}</h5>
            <p><strong>Statut :</strong>
                @if ($shop->statut === 'valide')
                    <span class="badge bg-success">Validée</span>
                @elseif ($shop->statut === 'refuse')
                    <span class="badge bg-danger">Refusée</span>
                @else
                    <span class="badge bg-warning text-dark">En attente</span>
                @endif
            </p>
            <p><strong>Description :</strong> {{ $shop->description ?? '—' }}</p>
            <p><strong>Localisation :</strong> {{ $shop->localisation ?? '—' }}</p>

            @if ($shop->logo)
                <p><strong>Logo :</strong><br>
                    <img src="{{ asset('storage/' . $shop->logo) }}" alt="Logo" width="150">
                </p>
            @endif

            @if ($shop->justificatif)
                <p><strong>Justificatif :</strong>
                    <a href="{{ asset('storage/' . $shop->justificatif) }}" target="_blank">📎 Voir le fichier</a>
                </p>
            @endif

            <a href="{{ route('vendor.shop.edit', $shop) }}" class="btn btn-secondary mt-3">Modifier</a>
        </div>
    @else
        <div class="alert alert-info">
            Vous n'avez pas encore créé de boutique.
        </div>
        <a href="{{ route('vendor.shop.create') }}" class="btn btn-primary">Créer une boutique</a>
    @endif
</div>
@endsection
