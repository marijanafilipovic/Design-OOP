<?php

namespace State;

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
        $stateFromDb = 'Processing';

        $this->state = match ($stateFromDb) {
            'Processing' => new ProcessingState(),
            // Means Order has been created
            // Validate Request before creating an Order has been done
            // Processing class decide which behavior to integrate to call Payment
            // Use Payment Strategy
            // Change Order status
            'Pending' => new PendingState(),
            'Shipped' => new ShippedState(),
            'Delivered' => new DeliveredState(),
            default => throw new Exception("Undefiend state for: $stateFromDb"),
        };
    }

    public function proceed(): void
    {
        $this->state->proceed($this);
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

    private function loadStateFromDatabse(int $orderId): string
    {
        $fakeOrder = [
                'orderId' => '123',
                'state' => 'Pending',
        ];

        return $fakeOrder[$orderId] ?? 'Pending';
    }

    private function saveStateToDB(): void
    {
        echo "Order {$this->orderId} stated has been updated...";
    }
}