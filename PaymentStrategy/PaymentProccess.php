<?php

use model\PaymentModel;

interface PaymentProccess
{
    public function proccess(PaymentModel  $paymentModel);

}