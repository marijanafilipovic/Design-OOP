<?php

namespace State;

interface OrderState
{
    public function proceed(OrderContext $context): void;
    public function getStatus(): string;
}
