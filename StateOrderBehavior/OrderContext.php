<?php

namespace State;

use Observer\OrderObserver;

class OrderContext
{
    private static array $instances = [];
    private OrderState $state;
    private int $orderId;

    private function __construct(int $orderId) {
        $this->orderID = $orderId;
        $this->loadStateFromDatabse();
    }

    public static function getInstance(int $orderId): self
    {
        if(!isset(self::$instances[$orderId])) {
            self::$instances[$orderId] = new self($orderId);
        }
        return self::$instances[$orderId];
    }

    private function loadStateFromDatabase(): void
    {
        // Fetch state from order db query
        $stateFromDb = 'Pending';

        $this->state = match ($stateFromDb) {
//            'Processing' => new ProcessingState(),
              'Pending' => new PendingState(),
//             Means Order has been created
//             Validate Request before creating an Order has been done
//             Processing class decide which behavior to integrate to call Payment
//             Use Payment Strategy
//             Update Order status
            'Shipped' => new ShippedState(),
            'Delivered' => new DeliveredState(),
            default => throw new Exception("Undefiend state for: $stateFromDb"),
        };
    }
    public function proceed(): void
    {
        $this->state->proceed($this);
        $this->notifyObservers();
        $this->saveStateToDatabase();
    }

    public function getStatus(): string
    {
        return $this->state->getStatus();
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function addObserver(OrderObserver $observer): void
    {
        $this->observers[] = $observer;
    }
    public function removeObserver(OrderObserver $observer): void
    {
        $this->observers[] = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observeres as $observer) {
            $observer->update($this);
        }
    }

    private function saveStateToDB(): void
    {
        echo "Order {$this->orderId} stated has been updated...";
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }
}