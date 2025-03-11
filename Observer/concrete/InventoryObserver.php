<?php
namespace Design\Observer\concrete;

namespace Design\Observer;

class InventoryObserver 
{
    // public function update(InventoryUpdateEvent $event): void
    public function update(Order $order): void
    {
        // echo "Inventory has been updated for order: {$event->getOrderId()}<br>";
        if ($order->status === 'Shipped') {
            $this->updateInventory($order);
        }
    }

    private function updateInventory(Order $order)
    {
        // This is just a placeholder. In a real system, we would interact with a database.
        echo "Updating inventory for order {$order->orderId} (Status: {$order->status})<br />";
        // Here, you could decrease the stock or perform other actions related to inventory.
        // Example: Decrease stock by the quantity of items in the order (for simplicity, using 1 item per order)
        echo "Inventory updated: Decreased stock for items in order {$order->orderId}.<br />";
    }
}