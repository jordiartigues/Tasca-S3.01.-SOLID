<?php 

require_once 'PaymentMethod.php';

class PaymentProcessor
{
    private PaymentMethod $payment_method;

    public function __construct(PaymentMethod $payment_method)
    {
        $this->payment_method = $payment_method;
    }

    public function sendPayment(float $amount): string
    {
        return $this->payment_method->sendPayment($amount);
    }
}