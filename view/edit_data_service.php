<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/service/'.$id,[
    'json' => [
        'jenishandphone' => $_POST['jenishp'],
        'keluhan' => $_POST['keluhan'],
        'pemilik' => $_POST['pemilik'],
        'nohp' => $_POST['notelp'],]
]);

$body = $response->getBody();
header('location:index.php')
// var_dump($body);

?>