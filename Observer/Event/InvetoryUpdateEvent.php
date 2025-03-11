<?php
namespace Design\Observer\Event;

class InventoryUpdateEvent
{
    private int $orderId;
    private $productId;
    private $status;

    public function __construct(string $orderId, string $productId, string $status)
    {
        $this->orderId = $orderId;
        $this->productId = $productId;
        $this->status = $status;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
