<?php

namespace Design\Observer\concrete;

use Design\Observer\OrderObserver;
use Design\Observer\Order;

class OrderStatusObserver implements OrderObserver
{
    public function update(Order $order): void
    {
        echo "Order {$order->getOrderId()} status has been updated to: " . $order->getStatus() . "<br>";
    }
}