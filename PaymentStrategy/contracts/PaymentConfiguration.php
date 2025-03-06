<?php
namespace PaymentStrategy\contracts;

interface PaymentConfiguration
{
    public function getConfiguration(): array;
}