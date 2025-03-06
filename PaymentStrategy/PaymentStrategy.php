<?php
namespace PaymentStrategy;

class PaymentStrategy
{
    public static function getFactory($paymentMethod): PaymentServiceFactory {
        switch ($paymentMethod) {
            case 'credit_card':
                return new CreditCardPaymentServiceFactory();
            case 'paypal':
                return new PayPalPaymentServiceFactory();
            default:
                throw new Exception("Unsupported payment method");
        }
    }
}