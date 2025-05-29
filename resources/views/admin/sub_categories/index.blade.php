@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-dark fw-bold">📁 Sous-catégories</h1>
        <a href="{{ route('admin.sub-categories.create') }}" class="btn btn-primary">
            ➕ Nouvelle Sous-catégorie
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
                            <th>Catégorie</th>
                            <th>Statut</th>
                            <th>Créé le</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subCategories as $subCategory)
                        <tr>
                            <td>
                                @if($subCategory->image_url)
                                    <img src="{{ asset('storage/' . $subCategory->image_url) }}" width="60">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $subCategory->name }}</td>
                            <td>{{ $subCategory->category->name ?? 'Non défini' }}</td>
                            <td>
                                <span class="badge bg-{{ $subCategory->is_active ? 'success' : 'secondary' }}">
                                    {{ $subCategory->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $subCategory->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.sub-categories.edit', $subCategory) }}" class="btn btn-sm btn-warning">✏️ Modifier</a>
                                <form action="{{ route('admin.sub-categories.destroy', $subCategory) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette sous-catégorie ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">🗑 Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Aucune sous-catégorie trouvée.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-3">
                {{ $subCategories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
