<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::all();
        $last_chat = Chat::latest()->first();
        $messages = $last_chat->messages;
        return view('admin.chats', compact('chats', 'messages', 'last_chat'));
    }
}
