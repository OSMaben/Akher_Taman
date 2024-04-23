<?php

namespace App\repository;

use App\Models\Messages;
use App\repository\IRepository\ImessagesRepository;
use Illuminate\Support\Facades\Auth;

class MessagesIMP implements ImessagesRepository
{
    public function recieveMessage($recipientId)
    {
        $allMessages = Messages::where(function ($query) use ($recipientId) {
            $query->where('sender_id', Auth::id())
                ->where('receiver_id', $recipientId);
        })
            ->orWhere(function ($query) use ($recipientId) {
                $query->where('sender_id', $recipientId)
                    ->where('receiver_id', Auth::id());
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return $allMessages;
    }

    public function getUniqueSenders()
    {
        $uniqueSenders = Messages::where('receiver_id', Auth::id())
            ->orWhere('sender_id', Auth::id())
            ->select('sender_id')
            ->distinct()
            ->get();

        return $uniqueSenders;
    }


    public function getMessagesWithLastSender($lastSenderId)
    {
        $allMessages = Messages::where(function ($query) use ($lastSenderId) {
            $query->where('sender_id', Auth::id())
                ->where('receiver_id', $lastSenderId);
        })
            ->orWhere(function ($query) use ($lastSenderId) {
                $query->where('sender_id', $lastSenderId)
                    ->where('receiver_id', Auth::id());
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return $allMessages;
    }
}
