<?php

namespace DesignPatterns\Facade;

class ModelApiSms
{
    public function buildToken(string $apiToken, string $apiPass): string
    {
        // simulate
        return md5(time());
    }

    public function sendSms(string $tokenApi, string $sender, string $recipient, string $recipientPhone, string $message): bool
    {
        echo "SMS sent successfully.\n";
        return true;
    }
}