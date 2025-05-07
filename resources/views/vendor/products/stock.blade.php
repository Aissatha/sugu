@extends('layouts.vendor')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Gestion de stock</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($products->count())
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Stock actuel</th>
                    <th>Statut</th>
                    <th>Mettre à jour</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr @if($product->stock <= 5) class="table-warning" @endif>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @if ($product->stock == 0)
                            <span class="badge bg-danger">Rupture</span>
                        @elseif ($product->stock <= 5)
                            <span class="badge bg-warning text-dark">Faible</span>
                        @else
                            <span class="badge bg-success">OK</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('vendor.products.updateStock', $product->id) }}" method="POST" class="d-flex">
                            @csrf
                            @method('PUT')
                            <input type="number" name="stock" class="form-control me-2" min="0" value="{{ $product->stock }}">
                            <button type="submit" class="btn btn-sm btn-primary">✔</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun produit trouvé.</p>
    @endif
</div>
@endsection
