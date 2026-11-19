<?php
require_once 'BankTransfer.php';
require_once 'StripePaymentGateway.php';
require_once 'PayPalPaymentGateway.php';
require_once 'PaymentProcessor.php';


//pagar con paypal
$pagoPaypal = new PayPalPaymentGateway();

$procesor1 = new PaymentProcessor($pagoPaypal);

echo $procesor1->sendPayment(100);

echo "\n";

//pagar con stripe

$pagoStripe = new StripePaymentGateway();

$procesor2 = new PaymentProcessor($pagoStripe);

echo $procesor2->sendPayment(200);

echo "\n";
//pagar con transfe

$pagoTransfe = new BankTransfer();

$procesor3 = new PaymentProcessor($pagoTransfe);

echo $procesor3->sendPayment(300);

echo "\n";

