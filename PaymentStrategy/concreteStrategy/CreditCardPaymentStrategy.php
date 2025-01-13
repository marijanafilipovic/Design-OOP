<?php

namespace concreteStrategy;

use model\CreditCardPaymentModel;
use PaymentProccess;
use model\PaymentModel;

class CreditCardPaymentStrategy implements PaymentProccess

{
    private $configuration;

    public function __construct(PaymentConfiguration $configuration) {
        $this->configuration = $configuration;
        $this->paymentMethod = $this->configuration->paymentMethod;

    }

    public function proccess(PaymentModel $paymentModel) {
        // Validate payment
        //Get configuration
        $config = $this->configuration->getConfiguration();
        // Payment processing logic (e.g., call to external API)
        echo "Processing payment with Credit Card: {$paymentModel->getAmount()} {$paymentModel->getCurrency()}\n";

        echo "Using API Key: " . $config['apiKey'] . "\n";
        //send request
        //make in DB Transaction and respected tables, events and logs
    }
}