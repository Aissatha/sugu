<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold text-dark">
        Produits de la catégorie : <span class="text-primary">{{ $category->name }}</span>
    </h2>

    @if($products->isEmpty())
        <div class="alert alert-info text-center">
            Aucun produit trouvé dans cette catégorie.
        </div>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm h-100">
                        @if($product->image_url)
                            <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->name }}" style="object-fit: cover; height: 200px;">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=Produit" class="card-img-top" alt="Image manquante">
                        @endif
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="text-muted">{{ number_format($product->price, 0, ',', ' ') }} FCFA</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Voir le produit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
