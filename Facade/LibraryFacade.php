<?php

namespace DesignPatterns\Facade;

use DesignPatterns\Facade\ModelApiSms;
use DesignPatterns\Facade\ModelCustomersControl;
use DesignPatterns\Facade\ModelMail;
use DesignPatterns\Facade\ModelStockControl;

class LibraryFacade
{
    public function withdrawal(string $bookCod, int $customerId): bool
    {
        $stock = new ModelStockControl();
        if (!$stock->validateStock($bookCod)) {
            throw new \Exception(('Stock out'));
        }

        return $stock->registerOut($bookCod, $customerId);
    }

    public function messageDelivery(string $bookCod, string $customerId, $apiKey, $apiPass): bool
    {
        $smsModel = new ModelApiSms();
        $customerModel = new ModelCustomersControl();
        $mailModel = new ModelMail();

        $customer = $customerModel->findCustomer($customerId);
        
        if ($mailModel->validateMailServer()) {
            $mailModel->sendMessage('Library Teste', $customer['name'], $customer['mail'], "Book code '$bookCode' has successfully withdrawn");
        }

        $token = $smsModel->buildToken($apiKey, $apiPass);
        $smsModel->sendSms($token, 'Library Teste', $customer['name'], $customer['mail'], "Book code '$bookCode' has successfully withdrawn");

        return true;

    }
}