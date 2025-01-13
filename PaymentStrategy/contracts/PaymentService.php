<?php

use model\PaymentModel;

interface PaymentService
{
    public function processPayment(PaymentModel $paymentModel);
}