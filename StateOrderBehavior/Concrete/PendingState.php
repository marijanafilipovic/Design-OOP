<?php

namespace State\Concrete;

use State\OrderContext;
use State\OrderState;

class PendingState implements OrderState
{
    public function proceed(OrderContext $context): void
    {
        echo "Order is now Proccesing.\n";
        $context->setState(new ProcessingState());
    }
    public function getStatus(): string{

        return "Pending";
    }
}