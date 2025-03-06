<?php

namespace State\Concrete;

use PaymentServiceFactorySelector;
use State\OrderContext;
use State\OrderState;

class PendingState implements OrderState
{
    public function proceed(OrderContext $context): void
    {
        echo "Order is now Pending.\n";
        try {
            $factory = PaymentServiceFactorySelector::getFactory($context['payment_method']);
            $paymentService = $factory->createPaymentService();
            $paymentService->processPayment($context);
            $context->setState(new ProcessingState());
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        $context->notifyObservers();
    }
    public function getStatus(): string{

        return "Pending";
    }
}