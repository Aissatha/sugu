@extends('layouts.vendor')

@section('title', 'Boutique en attente')

@section('content')
<div class="container py-5">
    <div class="alert alert-warning text-center shadow-sm rounded">
        <h4 class="alert-heading mb-3">⏳ Votre demande est en attente</h4>
        <p class="mb-0">Votre boutique est en cours d'examen. Vous serez notifié dès qu’un administrateur l’aura validée ou refusée.</p>
    </div>
</div>
@endsection
