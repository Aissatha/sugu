@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Modifier l'utilisateur</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="card shadow p-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe (laisser vide si inchangé)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-4">
            <label for="role" class="form-label">Rôle</label>
            <select name="role" class="form-select" required>
                @foreach($roles as $role)
                    <option value="{{ $role }}" {{ in_array($role, $user->getRoleNames()->toArray()) ? 'selected' : '' }}>
                        {{ ucfirst($role) }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success w-100">💾 Enregistrer</button>
    </form>
</div>
@endsection
