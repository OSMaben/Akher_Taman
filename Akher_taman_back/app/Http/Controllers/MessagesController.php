<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use App\service\IService\ImessageService;


class MessagesController extends Controller
{

    protected  $messages;


    public function __construct(ImessagesRepository $messages)
    {
        $this->messages = $messages;
    }

    public function GetMessage($recipientId)
    {
        $user = User::find($recipientId);
        $authUser = auth()->user();
        $senderIds = Messages::where('receiver_id', $authUser->id)->distinct()->pluck('sender_id');//this is return an array
        $senders = User::whereIn('id', $senderIds)->get();
        return view('message', compact('user', 'senders'));
    }

    public function sendMessage(Request $request, $recipientId)
    {
        $message = new Messages();
        $message->content = $request->input('content');
        $message->sender_id = auth()->id();
        $message->recipient_id = $recipientId;
        $message->save();
        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}
