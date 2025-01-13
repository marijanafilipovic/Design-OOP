<?php

namespace model;

abstract class PaymentModel
{
    private $amount;
    private $currency;
    private $paymentDate;
    private $paymentMethod;

    public function __construct($amount, $currency, $paymentDate, $paymentMethod) {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->paymentDate = $paymentDate;
        $this->paymentMethod = $paymentMethod;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function getPaymentDate() {
        return $this->paymentDate;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }
}