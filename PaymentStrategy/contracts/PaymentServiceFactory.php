<?php

interface PaymentServiceFactory
{
    public function createPaymentService(): PaymentService;
    public function createConfiguration(): PaymentConfiguration;

    public function createValidation(): PaymentValidation;
}