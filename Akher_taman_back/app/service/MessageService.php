<?php

namespace App\service;

use App\service\IService\ImessageService;
use App\repository\IRepository\ImessagesRepository;
class MessageService implements ImessageService
{

    protected $message;
    public function __construct(ImessagesRepository $message)
    {
        $this->message = $message;
    }

    public function getMessage($Reciever)
    {
        return $this->message->recieveMessage($Reciever);
    }

    public function getUniqueSenders()
    {
        return $this->message->getUniqueSenders();
    }

    public function getMessagesWithLastSender($lastSenderId)
    {
        return $this->message->getMessagesWithLastSender($lastSenderId);
    }
}
