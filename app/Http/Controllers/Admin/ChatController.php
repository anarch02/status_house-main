<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::orderBy('id', 'desc')->get();
        $active_chat = Chat::latest()->first();
        $messages = $active_chat->messages;
        return view('admin.chats', compact('chats', 'messages', 'active_chat'));
    }

    public function chat(string $id)
    {
        $chats = Chat::orderBy('id', 'desc')->get();
        $active_chat = Chat::find($id);
        $messages = $active_chat->messages;
        return view('admin.chats', compact('chats', 'messages', 'active_chat'));
    }
}
