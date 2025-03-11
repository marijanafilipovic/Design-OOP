<?php
namespace Design\Observer\Listener;

use Design\Observer\Event\InventoryUpdateEvent;

class InventoryUpdateListener
{
    public function onInventoryUpdate(InventoryUpdateEvent $event)
    {
        $orderId = $event->getOrderId();
        $productId = $event->getProductId();
        $status = $event->getStatus();

        // Simulate the process of updating the inventory for a specific product
        echo "Order {$orderId}: Updating product {$productId} to status {$status}.<br />";
        echo "Inventory status updated to {$status} for product {$productId}.<br />";
    }
}
