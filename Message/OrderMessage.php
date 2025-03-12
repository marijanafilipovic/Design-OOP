<?php
namespace Design\Message;

class OrderMessage {
    private $orderId;
    private $status;
    private $products = [];
    // private $bus;
    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
        // $this->bus = $bus;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }
    // public function addProduct(Product $product)
    // {
    //     $this->products[] = $product;
    // }
}