<?php

require_once 'PaymentMethod.php';

class PayPalPaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}