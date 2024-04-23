<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use App\service\IService\ImessageService;
use Illuminate\Support\Facades\Auth;


class MessagesController extends Controller
{

    protected  $messages;


    public function __construct(ImessageService $messages)
    {
        $this->messages = $messages;
    }

//    public function showMessage()
//    {
//        return view('message');
//    }

    public function GetMessage($recipientId)
    {
        $user = User::find($recipientId);
        $senders = $this->messages->getUniqueSenders();

        if ($senders->isEmpty()) {
            return view('message', compact('user', 'senders'));
        }
        $lastSender = $senders->last();
        $AllMessages = $this->messages->getMessagesWithLastSender($lastSender->sender_id);

        return view('message', compact('user', 'AllMessages', 'senders'));
    }


    public function sendMessage(Request $request, $recipientId)
    {
        $message = new Messages();
        $message->message = $request->input('message');
        $message->sender_id = auth()->id();
        $message->receiver_id = $recipientId;
        $message->save();
        return redirect()->back()->with('success', 'Message sent successfully.');
    }


    public function GetPersonMessage($recipientId)
    {
        $user = User::find($recipientId);
        $AllMessages = $this->messages->getMessage($recipientId);

        return view('messagesPerson', compact('user', 'AllMessages'));
    }


}
