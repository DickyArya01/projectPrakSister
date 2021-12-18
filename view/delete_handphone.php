<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;


$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5
]);

$response = $client->request('DELETE', '/api/handphone/'.$id);
$body = $response->getBody();
$data_body = json_decode($body);

header('location:handphone.php')
?>