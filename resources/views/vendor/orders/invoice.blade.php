<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Facture #{{ $order->id }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        .header, .footer { text-align: center; margin-bottom: 20px; }
        .table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; }
        .table th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Facture - Commande #{{ $order->id }}</h2>
        <p>Date : {{ $order->created_at->format('d/m/Y H:i') }}</p>
    </div>

    <p><strong>Vendeur :</strong> {{ $order->vendor->name }}</p>
    <p><strong>Client :</strong> {{ $order->client->name ?? 'Client supprimé' }}</p>

    <table class="table">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
            <tr>
                <td>{{ $item['name'] ?? 'Produit' }}</td>
                <td>{{ $item['quantity'] ?? 1 }}</td>
                <td>{{ number_format($item['price'], 0, ',', ' ') }} FCFA</td>
                <td>{{ number_format($item['price'] * ($item['quantity'] ?? 1), 0, ',', ' ') }} FCFA</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total payé :</strong> {{ number_format($order->total_price, 0, ',', ' ') }} FCFA</p>

    <div class="footer">
        <p>Merci pour votre confiance !</p>
    </div>
</body>
</html>
