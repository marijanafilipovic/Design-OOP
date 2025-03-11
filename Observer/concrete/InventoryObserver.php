<?php
namespace Design\Observer\concrete;

class InventoryObserver 
{
    public function update(InventoryUpdateEvent $event): void
    {
        echo "Inventory has been updated for order: {$event->getOrderId()}<br>";
    }
}