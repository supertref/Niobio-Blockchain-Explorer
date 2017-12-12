<?php

$api = require_once __DIR__ . '/../../api/api-config.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $api . '/getinfo');
$result = curl_exec($ch);
$obj = json_decode($result, true);
curl_close($ch);
//print_r($obj);
$difficulty = $obj['difficulty'];
$hashrate = round($difficulty / 240);
print_r($hashrate);
