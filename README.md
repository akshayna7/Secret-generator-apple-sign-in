# Apple Signin Client Secret Generator for php

## Description
This package provides class that generates token derived from your private key using ES256 JWT algorithm.

## Requirements

PHP 7.2+

## Installation

Install the composer package:

```composer require kissdigital-com/apple-sign-in-client-secret-generator```

## Example Usage

```php
<?php

use Kissdigitalcom\AppleSignIn\ClientSecret;

$clientId = 'com.sdv.sdv';
$teamId   = '778c8dcd';
$keyId    = '8d8cd8c8dc8';
$certPath = __DIR__ . '/certificate.p8';

$clientSecret = new ClientSecret($clientId, $teamId, $keyId, $certPath);

echo $clientSecret->generate();

```

