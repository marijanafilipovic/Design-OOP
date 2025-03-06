<?php
require 'vendor/autoload.php';

echo "Autoloader file: " . realpath('vendor/autoload.php') . "\n";

echo "Welcome Test Server PHP apache suckers";
use Design\Observer\Order;
use Design\Observer\concrete\OrderStatusObserver;
use Design\Observer\OrderObserver;

// require_once 'Observer/Order.php';
// require_once 'Observer/OrderStatusObserver.php';
// require_once 'Observer/OrderObserver.php';
// require_once 'Observer/OrderContext.php';
// Create an order
$order = new Order('12345');
// die(var_dump($order));
$order->status = 'Pending';
$order->orderId = '12345';


// Attach the observer
$orderObserver = new OrderStatusObserver();
$order->attach($orderObserver);

echo "<br>Change order status<br />";
// Change order status
$order->changeStatus('Processing');
$order->changeStatus('Shipped');
$order->changeStatus('Delivered');