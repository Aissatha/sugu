@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Ajouter un utilisateur</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST" class="card shadow p-4">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" name="name" class="form-control" placeholder="Ex : Bahama Sangaré" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Ex : bahama@gmail.com" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <div class="mb-4">
            <label for="role" class="form-label">Rôle</label>
            <select name="role" class="form-select" required>
                <option value="" disabled selected>-- Sélectionner un rôle --</option>
                <option value="admin">Admin</option>
                <option value="vendor">Vendeur</option>
                <option value="client">Client</option>
                <option value="user">Utilisateur</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">➕ Ajouter l'utilisateur</button>
    </form>
</div>
@endsection
