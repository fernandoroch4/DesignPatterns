<?php

namespace DesignPatterns\Facade;

class ModelMail
{
    public function validateMailServer(): bool
    {
        return true;
    }

    public function sendMessage(string $sender, string $recipient, string $recipientMail, string $message): bool
    {
        echo "Mail sent successfully.\n";
        return true;
    }
}