<?php

interface PaymentValidation
{
    public function validate(PaymentModel $paymentModel): bool;
}