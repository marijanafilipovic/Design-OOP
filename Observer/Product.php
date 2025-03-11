<?php
namespace Design\Observer;

use Design\Observer\Event\InventoryUpdateEvent;

class Product
{
    private $productId;
    private $name;
    private $inventoryStatus;

    public function __construct(string $productId, string $name)
    {
        $this->productId = $productId;
        $this->name = $name;
        $this->inventoryStatus = 'Available'; // Default status
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInventoryStatus(): string
    {
        return $this->inventoryStatus;
    }

    public function setInventoryStatus(string $status)
    {
        $this->inventoryStatus = $status;
    }
}