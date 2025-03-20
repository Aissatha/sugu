@extends('layouts.admin')

@section('content')
    <h1>Liste des utilisateurs</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Ajouter un utilisateur</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->getRoleNames()->implode(', ') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}">Modifier</a>
                        <form action="{{ route('admin.users.delete', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
