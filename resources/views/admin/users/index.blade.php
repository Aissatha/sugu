@extends('layouts.admin')

@section('title', 'Liste des utilisateurs')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">📋 Liste des utilisateurs</h1>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.users.index') }}">Liste</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.create') }}">➕ Ajouter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.historique') }}">🕒 Historique</a>
            </li>
        </ul>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                            <td>
                                @if($user->is_blocked)
                                    <span class="badge bg-danger">Bloqué</span>
                                @else
                                    <span class="badge bg-success">Actif</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">✏️</a>

                                <form action="{{ route('admin.users.block', $user->id) }}" method="POST" class="d-inline-block"
                                      onsubmit="return confirm('Confirmer le {{ $user->is_blocked ? 'déblocage' : 'blocage' }} ?')">
                                    @csrf
                                    <button type="submit" class="btn btn-sm {{ $user->is_blocked ? 'btn-success' : 'btn-secondary' }}">
                                        {{ $user->is_blocked ? 'Débloquer' : 'Bloquer' }}
                                    </button>
                                </form>

                                <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" class="d-inline-block"
                                      onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Aucun utilisateur trouvé.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
