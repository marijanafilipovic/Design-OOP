<?php

namespace model;

class CreditCardPaymentModel extends PaymentModel
{
    private int $cardNumber;
    private string|mix $expiryDate;
    private int $cvv;
    public function __construct($amount, $currency, $paymentDate, $paymentMethod, $cardNumber, $expiryDate, $cvv)
    {
        parent::__construct($amount, $currency, $paymentDate, $paymentMethod);
        $this->cardNumber = $cardNumber;
        $this->expiryDate = $expiryDate;
        $this->cvv = $cvv;
    }
    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function getExpiryDate() {
        return $this->expiryDate;
    }

    public function getCvv() {
        return $this->cvv;
    }
}