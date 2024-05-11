<?php
require('vendor/autoload.php');
use Kissdigitalcom\AppleSignIn\ClientSecret;

$clientId = 'com.package.app';
$teamId   = '343NNVNKD';
$keyId    = '34NJNDCJ';
$certPath = __DIR__ . '/key.p8';

$clientSecret = new ClientSecret($clientId, $teamId, $keyId, $certPath);

echo $clientSecret->generate();
?>
