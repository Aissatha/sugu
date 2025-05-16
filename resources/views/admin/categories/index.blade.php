@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-dark fw-bold">📂 Gestion des Catégories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            ➕ Nouvelle Catégorie
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Statut</th>
                            <th>Créé le</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>
                                @if($category->image_url)
                                    <img src="{{ asset('storage/' . $category->image_url) }}" alt="Image" width="60">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <span class="badge bg-{{ $category->is_active ? 'success' : 'secondary' }}">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $category->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">✏️ Modifier</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">🗑 Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Aucune catégorie trouvée.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-3">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
