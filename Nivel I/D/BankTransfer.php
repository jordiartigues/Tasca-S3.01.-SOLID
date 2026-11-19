<?php

require_once 'PaymentMethod.php';

class BankTransfer implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by transfer";
    }
}