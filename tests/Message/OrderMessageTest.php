<?php

use PHPUnit\Framework\TestCase;
use Design\Message\OrderMessage;

class OrderMessageTest extends TestCase
{
    public function testGetOrderId()
    {
        $orderId = '123';
        $order = new OrderMessage($orderId);
        $this->assertEquals($orderId, $order->getOrderId());
    }
}