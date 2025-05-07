@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Mes Produits</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('vendor.products.create') }}" class="btn btn-success mb-3">+ Ajouter un produit</a>

    @if ($products->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Statut</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <span class="badge {{ $product->status == 'actif' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($product->status) }}
                        </span>
                    </td>
                    <td>
                        @if ($product->image_url)
                            <img src="{{ asset($product->image_url) }}" width="50">
                        @else
                            <em>Aucune</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('vendor.products.edit', $product->id) }}" class="btn btn-sm btn-primary">Modifier</a>

                        <form action="{{ route('vendor.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    @else
        <p>Aucun produit enregistré.</p>
    @endif
</div>
@endsection

