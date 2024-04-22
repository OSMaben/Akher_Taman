<?php

namespace App\repository;

use App\Models\Messages;
use App\repository\IRepository\ImessagesRepository;

class MessagesIMP implements ImessagesRepository
{
    public function recieveMessage($recipientId)
    {
        $allMessages = Messages::where('sender_id', Auth::id())
            ->where('receiver_id', $recipientId)
            ->orWhere('sender_id', $recipientId)
            ->where('sender_id', Auth::id())
            ->orderBy('created_at', 'asc')
            ->get();
        return $allMessages;
    }
}
