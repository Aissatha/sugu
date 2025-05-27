@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-dark fw-bold">📦 Gestion des Boutiques</h1>
        <a href="{{ route('shops.create') }}" class="btn btn-primary">
            ➕ Nouvelle Boutique
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th>Nom</th>
                            <th>Vendeur</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($shops as $shop)
                            <tr>
                                <td>{{ $shop->nom }}</td>
                                <td>{{ $shop->vendor->name ?? 'N/A' }}</td>
                               <td>
    <span class="badge
        @if($shop->statut === 'valide') bg-success
        @elseif($shop->statut === 'refuse') bg-danger
        @else bg-warning text-dark @endif">
        {{ ucfirst($shop->statut) }}
    </span>
</td>

                               <td class="text-center">
    <a href="{{ route('shops.show', $shop) }}" class="btn btn-sm btn-outline-primary me-1">Voir</a>

    @if($shop->statut === 'en_attente')
        <form action="{{ route('shops.validate', $shop) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-success me-1">Valider</button>
        </form>

        <form action="{{ route('shops.refuse', $shop) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-danger me-1">Refuser</button>
        </form>
    @else
        <a href="{{ route('shops.edit', $shop) }}" class="btn btn-sm btn-outline-warning me-1">Modifier</a>
        <form action="{{ route('shops.destroy', $shop) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette boutique ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
        </form>
    @endif
</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">Aucune boutique disponible pour le moment.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $shops->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
