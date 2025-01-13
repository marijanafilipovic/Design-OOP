<?php

namespace State\Concrete;

use PaymentServiceFactorySelector;
use State\OrderContext;
use State\OrderState;

class PendingState implements OrderState
{
    public function proceed(OrderContext $context): void
    {
        try {
            $factory = PaymentServiceFactorySelector::getFactory($context['payment_method']);
            $paymentService = $factory->createPaymentService();
            $paymentService->processPayment($context);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getStatus(): string{

        return "Pending";
    }
}