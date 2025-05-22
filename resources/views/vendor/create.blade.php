@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Créer ma boutique</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('vendor.shop.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nom de la boutique *</label>
            <input type="text" name="nom" class="form-control" required value="{{ old('nom') }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Adresse / Localisation</label>
            <input type="text" name="localisation" class="form-control" value="{{ old('localisation') }}">
        </div>

        <div class="mb-3">
            <label>Logo (optionnel)</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Justificatif (PDF, image...)</label>
            <input type="file" name="justificatif" class="form-control">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
        </div>
    </form>
</div>
@endsection
