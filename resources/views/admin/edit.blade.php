@extends('layouts.admin')

@section('content')
  <h3>Modifier l'Utilisateur</h3>

  <!-- Formulaire pour modifier un utilisateur -->
  <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="role">Rôle</label>
      <select id="role" name="role" class="form-control" required>
        <option value="client" {{ old('role', $user->role) == 'client' ? 'selected' : '' }}>Client</option>
        <option value="vendeur" {{ old('role', $user->role) == 'vendeur' ? 'selected' : '' }}>Vendeur</option>
        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
      </select>
      @error('role')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="is_active">Statut</label>
      <select id="is_active" name="is_active" class="form-control">
        <option value="1" {{ old('is_active', $user->is_active) == 1 ? 'selected' : '' }}>Actif</option>
        <option value="0" {{ old('is_active', $user->is_active) == 0 ? 'selected' : '' }}>Inactif</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
  </form>
@endsection
