<?php

namespace concreteStrategy;

use model\PaymentModel;
use PaymentService;
use PaymentValidation;

class CreditCardPaymentStrategy implements PaymentService

{
    private $configuration;
    private $validation;

    public function __construct(PaymentConfiguration $configuration, PaymentValidation $validation) {
        $this->configuration = $configuration;
        $this->validation = $validation;
    }

    public function processPayment(PaymentModel $paymentModel) {
        // Validate payment
        if(!$this->validation->validate($paymentModel)) {
            throw new Exception("Payment validation faild.");
        }
        //Get configuration
        $config = $this->configuration->getConfiguration();
        // Payment processing logic (e.g., call to external API)
        echo "Processing payment with Credit Card: {$paymentModel->getAmount()} {$paymentModel->getCurrency()}\n";

        echo "Using API Key: " . $config['apiKey'] . "\n";
        //send request
        //make in DB Transaction and respected tables, event state on Order, add to logs
    }

}