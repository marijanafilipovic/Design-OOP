<?php

namespace model;

class PayPalPaymentModel extends PaymentModel
{
    public $email;
    public $paymentAmount;
    public $transactionId;

    public function __construct($email, $paymentAmount, $transactionId)
    {
        $this->email = $email;
        $this->paymentAmount = $paymentAmount;
        $this->transactionId = $transactionId;
    }
    public function getPaymentDetails() {
        return "PayPal Payment: Amount: {$this->amount} {$this->currency}, Date: {$this->paymentDate}, Card: {$this->cardNumber}";
    }
}