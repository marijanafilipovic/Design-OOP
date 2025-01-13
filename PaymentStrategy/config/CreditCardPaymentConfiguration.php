<?php

namespace config;

use PaymentConfiguration;

class CreditCardPaymentConfiguration implements PaymentConfiguration
{
    private $config;

    public function __construct()
    {
        $this->config = [
            'apiKey' => 'credit_card_api_key',
            'apiEndpoint' => 'https://api.paymentprovider.com/credit_card'
        ];
    }

    public function getConfiguration(): array
    {
        return $this->config;
    }
}