<?php

namespace Design\Observer;

interface OrderObserver
{
    public function update(Order $order): void;
}