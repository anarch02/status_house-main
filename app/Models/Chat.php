<?php

namespace App\Models;

use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Database\Eloquent\Model;

class Chat extends TelegraphChat
{
    protected $fillable = [
        'chat_id',
        'name',
        'full_name',
        'phone',
        'state',
    ];

    const STATE_AWAITING_NAME = 0;
    const STATE_AWAITING_PHONE = 1;
    const STATE_COMPLETED = 2;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
