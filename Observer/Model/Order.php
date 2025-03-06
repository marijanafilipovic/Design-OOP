<?php

namespace Design\Observer\Model;

class Order {

    public $orderId;
    public $status;
    private $observers = [];

    public function __construct(string $orderId, string $status, OrderObserver $observer)
    {
        $this->orderId = $orderId;
        $this->status = $status;
    }
}