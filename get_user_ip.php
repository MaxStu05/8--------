<?php
header('Content-Type: application/json');
$ips = json_decode(file_get_contents('ips.json'), true);
$ips['ips'][] = $_SERVER['REMOTE_ADDR'];
file_put_contents('ips.json', json_encode($ips));
echo json_encode(array('ip' => $_SERVER['REMOTE_ADDR']));
