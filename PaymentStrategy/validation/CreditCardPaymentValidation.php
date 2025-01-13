<?php

namespace validation;

class CreditCardPaymentValidation implements PaymentValidation
{
    public function validate(PaymentModel $paymentModel): bool {
        if (!$paymentModel instanceof CreditCardPaymentModel) {
            throw new Exception("Invalid payment model for Credit Card validation.");
        }

        if ($paymentModel->getAmount() <= 0) {
            echo "Amount must be greater than 0.\n";
            return false;
        }

        if (strlen($paymentModel->getCardNumber()) != 16) {
            echo "Invalid card number.\n";
            return false;
        }

        if (strtotime($paymentModel->getExpiryDate()) < time()) {
            echo "Card has expired.\n";
            return false;
        }

        if (strlen($paymentModel->getCvv()) != 3) {
            echo "Invalid CVV.\n";
            return false;
        }

        echo "Credit Card payment is valid.\n";
        return true;
    }
}