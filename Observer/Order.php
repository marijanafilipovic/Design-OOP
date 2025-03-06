<?php

namespace Design\Observer;

class Order
{
    public $observers = [];
    public $status;
    public $orderId;

    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function attach(OrderObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(OrderObserver $observer): void
    {
        foreach ($this->observers as $key => $currentObserver) {
            if ($currentObserver === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeStatus(string $status): void
    {
        $this->status = $status;
        $this->notify();
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }
}
