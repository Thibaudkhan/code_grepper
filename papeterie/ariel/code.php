<?php

/*
* You must have Guzzle, just run the next commands in your project (you need composer)
* composer require guzzlehttp/guzzle
* composer install
*/

$client = new \GuzzleHttp\Client();
$response = $client->get('https://ariel.pfregistres.com/apiUnlocked/all/{siren}');

echo $response->getBody();
