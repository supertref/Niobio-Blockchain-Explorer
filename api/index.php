<?php

$api = require_once __DIR__ . '/api-config.php';

if ($_GET['method'] === '/getinfo') {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $api . '/getinfo');
    $result = curl_exec($ch);

    curl_close($ch);

    echo $result;
}

if ($_GET['method'] === '/json_rpc') {
    $json = json_encode($_POST);
    $vars = key(json_decode($json, true));
    $data_string = $vars;

    $ch = curl_init($api . '/json_rpc');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);

    echo $result;
}

