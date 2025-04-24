@extends('layouts.app') {{-- ou admin.layout si tu en as un --}}

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">🆕 Demandes d’ouverture de boutique</h1>

    {{-- Flash messages --}}
    @foreach (['success', 'error', 'warning', 'info'] as $msg)
        @if(session($msg))
            <div class="mb-4 p-4 rounded bg-{{ $msg === 'success' ? 'green' : ($msg === 'error' ? 'red' : ($msg === 'warning' ? 'yellow' : 'blue')) }}-100 text-{{ $msg === 'success' ? 'green' : ($msg === 'error' ? 'red' : ($msg === 'warning' ? 'yellow' : 'blue')) }}-800">
                {{ session($msg) }}
            </div>
        @endif
    @endforeach

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100 text-left text-sm font-semibold">
                    <th class="p-4">Nom</th>
                    <th class="p-4">Propriétaire</th>
                    <th class="p-4">Description</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($boutiques as $boutique)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">{{ $boutique->nom }}</td>
                        <td class="p-4">{{ $boutique->user->name }}<br><small>{{ $boutique->user->email }}</small></td>
                        <td class="p-4">{{ \Illuminate\Support\Str::limit($boutique->description, 80) }}</td>
                        <td class="p-4 space-y-2">
                            {{-- Approver --}}
                            <form action="{{ route('admin.boutiques.approve', $boutique->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600">
                                    ✅ Approuver
                                </button>
                            </form>

                            {{-- Refuser --}}
                            <form action="{{ route('admin.boutiques.reject', $boutique->id) }}" method="POST" onsubmit="return confirm('Refuser cette demande ?');">
                                @csrf
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                    ❌ Refuser
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-gray-500">Aucune demande en attente pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $boutiques->links() }}
    </div>
</div>
@endsection
