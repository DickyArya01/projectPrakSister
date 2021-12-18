<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/handphone',[
    'json' => [
        'jenishandphone' => $_POST['jenishp'],
        'spesifikasi' => $_POST['spesifikasi'],
        'status' => $_POST['status'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:handphone.php')

?>