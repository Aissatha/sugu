@extends('layouts.vendor')

@section('title', 'Ma Boutique')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Ma Boutique</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($shop)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $shop->nom }}</h5>
                <p class="card-text">{{ $shop->description }}</p>
                <p class="card-text"><strong>Localisation :</strong> {{ $shop->localisation }}</p>
                <p class="card-text"><strong>Statut :</strong> {{ ucfirst($shop->statut) }}</p>

                @if($shop->logo)
                    <p><strong>Logo :</strong><br>
                        <img src="{{ asset('storage/' . $shop->logo) }}" alt="Logo" style="max-height: 120px;">
                    </p>
                @endif

                @if($shop->justificatif)
                    <p><strong>Justificatif :</strong>
                        <a href="{{ asset('storage/' . $shop->justificatif) }}" target="_blank">Voir le fichier</a>
                    </p>
                @endif
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Vous n'avez pas encore de boutique. <a href="{{ route('vendor.shops.create') }}">Cliquez ici pour en créer une</a>.
        </div>
    @endif
</div>
@endsection
