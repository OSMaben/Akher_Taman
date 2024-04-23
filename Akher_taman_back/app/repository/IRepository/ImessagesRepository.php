<?php

namespace App\repository\IRepository;
interface ImessagesRepository
{
    //method here
    public function recieveMessage($recipientId);
    public function getUniqueSenders();

    public function getMessagesWithLastSender($lastSenderId);
}
