<?php

namespace State\Concrete;

use PaymentServiceFactory;
use PaymentServiceFactorySelector;
use PaymentStrategy;
use State\OrderContext;
use State\OrderState;

class ProcessingState implements OrderState
{
    public function proceed(OrderContext $context): void
    {
        // TODO: Implement Payment methods.
        try {
        $factory = PaymentServiceFactorySelector::getFactory($context['payment_method']);
        $paymentService = $factory->createPaymentService();
        $paymentService->processPayment($context);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStatus(): string
    {
        return "sample";
        // TODO: Implement getStatus() method.
    }
}