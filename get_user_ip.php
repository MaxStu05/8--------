<?php
header('Content-Type: application/json');
echo json_encode(array('ip' => $_SERVER['REMOTE_ADDR']));
