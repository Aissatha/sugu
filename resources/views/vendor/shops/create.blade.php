@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold mb-4">➕ Demander la création de ma boutique</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vendor.shops.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la boutique</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="localisation" class="form-label">Localisation</label>
            <input type="text" name="localisation" id="localisation" class="form-control" value="{{ old('localisation') }}">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo (optionnel)</label>
            <input type="file" name="logo" id="logo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="justificatif" class="form-label">Justificatif (PDF ou image, optionnel)</label>
            <input type="file" name="justificatif" id="justificatif" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">📨 Envoyer la demande</button>
    </form>
</div>
@endsection
