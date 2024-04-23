<?php

namespace App\service\IService;

interface ImessageService
{
    public function getMessage($Reciever);
    public function getUniqueSenders();

    public function getMessagesWithLastSender($lastSenderId);
}
