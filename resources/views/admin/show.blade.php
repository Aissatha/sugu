@extends('layouts.admin')

@section('content')
  <h3>Détails de l'Utilisateur</h3>

  <div class="user-details">
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>
    <p><strong>Rôle :</strong> {{ ucfirst($user->role) }}</p>
    <p><strong>Statut :</strong>
      <span class="badge {{ $user->is_active ? 'bg-success' : 'bg-danger' }}">
        {{ $user->is_active ? 'Actif' : 'Inactif' }}
      </span>
    </p>

    <h4>Historique des Actions</h4>
    <table class="table">
      <thead>
        <tr>
          <th>Action</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user->actions as $action)
          <tr>
            <td>{{ $action->action }}</td>
            <td>{{ $action->created_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
  </div>
@endsection
