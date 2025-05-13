@extends('layouts.vendor')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-xl font-bold mb-4">Discussion avec {{ $client->name }}</h2>

    {{-- Historique des messages --}}
    <div id="messageContainer" class="border border-gray-300 p-4 h-64 overflow-y-auto mb-4 bg-gray-50">
        <p class="text-gray-500">Chargement des messages...</p>
    </div>

    {{-- Formulaire d'envoi --}}
    <form method="POST" action="{{ route('vendor.chat.sendMessage', $client->id) }}">
        @csrf
        <textarea name="message" class="w-full border border-gray-300 p-2 rounded mb-2" rows="3" placeholder="Écrire un message..."></textarea>
        <button class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Envoyer</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    const clientId = {{ $client->id }};
    const currentUserId = {{ Auth::id() }};

    function fetchMessages() {
        fetch(`/vendor/chat/client/${clientId}/messages`)
            .then(response => response.json())
            .then(messages => {
                const container = document.getElementById('messageContainer');
                container.innerHTML = '';

                if (messages.length === 0) {
                    container.innerHTML = '<p class="text-gray-500">Aucun message pour le moment.</p>';
                } else {
                    messages.forEach(message => {
                        const msg = document.createElement('div');
                        msg.classList.add('mb-2');
                        msg.innerHTML = `
                            <strong>${message.sender_id === currentUserId ? 'Moi' : '{{ $client->name }}'} :</strong>
                            <span class="text-sm text-gray-800">${message.content}</span><br>
                            <span class="text-xs text-gray-500">${new Date(message.created_at).toLocaleString()}</span>
                        `;
                        container.appendChild(msg);
                    });

                    container.scrollTop = container.scrollHeight;
                }
            });
    }

    setInterval(fetchMessages, 3000);
    fetchMessages();
</script>
@endsection
