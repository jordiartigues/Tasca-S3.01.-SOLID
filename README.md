# S3.01 - Principis SOLID

## Descripció

En aquesta tasca es treballen els principis SOLID mitjançant dos exercicis pràctics de programació orientada a objectes amb PHP.

* **Exercici 1 - Olympic Games:** aplicació per gestionar i processar informació sobre atletes, esdeveniments esportius i resultats. Es treballa especialment la separació de responsabilitats (SRP).
* **Exercici 2 - Payment Methods:** implementació de diferents mètodes de pagament (PayPal, Stripe i transferència bancària) mitjançant interfícies i injecció de dependències. Es treballa el principi d'inversió de dependències (DIP).

## Tecnologies

* PHP 8.2
* Visual Studio Code
* XAMPP

## Instal·lació

1. Clonar aquest repositori:

```bash
git clone
```

2. Accedir a la carpeta del projecte.
3. Obrir els fitxers amb Visual Studio Code.
4. Executar els exercicis amb PHP.

## Estructura del projecte

```text
S1.09-SOLID/
│
├── OlympicGames/
│   ├── index.php
│   └── Athlete.php
│   └── Event.php
│   └── OlympicGames.php
│   └── PrinterOlympicGames.php
│   └── Result.php

└── PaymentMethods/
    ├── PaymentMethod.php
    ├── PaymentProcessor.php
    ├── BankTransfer.php
    ├── PayPalPaymentGateway.php
    ├── StripePaymentGateway.php
    └── index.php
```

## Demo

Els exercicis es poden executar localment mitjançant PHP i XAMPP.

## Autor

Jordi Artigues
