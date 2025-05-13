<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Affiche la conversation avec un client.
     */
    public function chatWithClient($clientId)
    {
        $client = User::where('id', $clientId)
            ->whereHas('roles', fn ($q) => $q->where('name', 'user'))
            ->firstOrFail();

        $messages = Message::where(function ($query) use ($client) {
                $query->where('sender_id', Auth::id())->where('receiver_id', $client->id);
            })->orWhere(function ($query) use ($client) {
                $query->where('sender_id', $client->id)->where('receiver_id', Auth::id());
            })->orderBy('created_at', 'asc')->get();

        return view('vendor.chat.show', compact('client', 'messages'));
    }

    /**
     * Envoie un message au client.
     */
    public function sendMessage(Request $request, $clientId)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        $client = User::findOrFail($clientId);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $client->id,
            'content' => $request->message,
        ]);

        return redirect()->route('vendor.chat.withClient', $client->id);
    }

    /**
     * Retourne les messages en JSON (pour le rafraîchissement AJAX).
     */
    public function fetchMessages($clientId)
    {
        $client = User::findOrFail($clientId);

        $messages = Message::where(function ($query) use ($client) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $client->id);
        })->orWhere(function ($query) use ($client) {
            $query->where('sender_id', $client->id)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return response()->json($messages);
    }
}
